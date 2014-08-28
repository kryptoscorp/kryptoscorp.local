<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// list all users
		$users = User::all();

		if (Auth::check()){
			$admin = Auth::user()->getAdmin();
		}else {
			$admin = false;
		}

		return View::make('backend.users.index')->with('users',$users)->with('admin',$admin);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		if (Auth::check()){
			$admin = Auth::user()->getAdmin();
		}else {
			$admin = false;
		}
		return View::make('backend.users.create') -> with ('admin', $admin);

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//validate rules and validator
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8',
			'phone' => 'numeric'
		);
		$validator = Validator::make(Input::all(),$rules);

		//login
		if ($validator -> fails()) {
			return Redirect::to('users/create') -> withErrors($validator) -> withInput (Input::except('password'));
		} else {
			//store
			$user = new User;
			$user -> name = Input::get('name');
			$user -> email = Input::get('email');
			$user -> password = Hash::make( Input::get('password'));
			$user -> phone = Input::get('phone');
			$user -> direccion = Input::get('direccion');
			$user -> comentarios = Input::get('comentarios');
			$user -> admin = Input::get('admin');

			$user -> save();

			Session::flash('message','Usuario creado!!');
			return Redirect::to('users');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//get user
		$user = User::find($id);
		return View::make('backend.users.show') -> with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//get user
		$user = User::find($id);
		if (Auth::check()) {
			$admin = Auth::user()->getAdmin();
		} else {
			$admin = false;
		}
		return View::make('backend.users.edit') -> with ('user', $user) -> with('admin', $admin);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//validate rules and validator
		$rules = array(
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8',
			'phone' => 'numeric'
		);
		$validator = Validator::make(Input::all(),$rules);

		//login
		if ($validator -> fails()) {
			return Redirect::to('users/' . $id . '/edit') -> withErrors($validator) -> withInput (Input::except('password'));
		} else {
			//store
			$user = User::find($id);
			$user -> name = Input::get('name');
			$user -> email = Input::get('email');
			$user -> password = Hash::make( Input::get('password'));
			$user -> phone = Input::get('phone');
			$user -> direccion = Input::get('direccion');
			$user -> comentarios = Input::get('comentarios');
			$user -> admin = Input::get('admin');

			$user -> save();

			Session::flash('message','Usuario editado!!');
			return Redirect::to('users');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//delete
		$user = User::find($id);
		$user -> delete();

		Session::flash('message', 'Usuario eliminado');
		return Redirect::to('users');
	}


}
