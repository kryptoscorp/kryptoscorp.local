<?php

class CeventController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//list all cevents
		$events = Cevent::all();
		if (Auth::check()){
			$admin = Auth::user()->getAdmin();
		}else {
			$admin = false;
		}
		return View::make('backend.events.index')->with('events',$events)->with('admin',$admin);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$consultores = User::where('admin','=','false')->lists('name','id');
		return View::make ('backend.events.create')-> with ('consultores', $consultores);
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
			'consultores' => 'required',
			'fecha_inicio' => 'required|date',
			'fecha_final' => 'required|date',
			'fecha_cobro' => 'required|date',
		);
		$consultor = User::find(Input::get('consultores'));
		$validator = Validator::make(Input::all(),$rules);
		if ($validator -> fails()){
			return Redirect::to('events/create') -> withErrors($validator) -> withInput (Input::except('password'));
		} else {
			//store
			$event = new Cevent;
			$event -> name = Input::get('name');
			$event -> users()->associate($consultor);
			$event -> fecha_inicio = Input::get('fecha_inicio');
			$event -> fecha_final = Input::get('fecha_final');
			$event -> fecha_cobro = Input::get('fecha_cobro');

		}
		$event -> save();

		Session::flash('message','Evento registrado!!');
			return Redirect::to('events');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//get cevent
		$event = Cevent::find($id);
		return View::make('backend.events.show') -> with('event',$event);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$user = Cevent::find($id);
		if (Auth::check()){
			$admin = Auth::user()->getAdmin;
		}else {
			$admin = false;
		}
		return View::make('backend.event.edit') -> with ('event', $event) -> with('admin', $admin);

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
			'fecha_inicio' => 'required|date',
			'fecha_final' => 'required|date',
			'fecha_cobro' => 'required|date',
		);
		$validator = Validator::make(Input::all(),$rules);
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
		$cevent = cevent::find($id);
		$cevent -> delete();

		Session::flash('message', 'Evento eliminado');
		return Redirect::to('events');
	}


}
