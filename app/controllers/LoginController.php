<?php

class LoginController extends \BaseController {

	public function showLogin()
	{
		return View::make('backend.login');
	}

	public function doLogin()
	{
		//validate rules and validator
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|min:8',
		);
		$validator = Validator::make(Input::all(),$rules);

		if($validator -> fails()) {
			return Redirect::to('login') -> withErrors($validator) -> withInput(Input::except('password'));
		} else {
			$userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				);
			if(Auth::attempt($userdata)) {
				Session::flash('message','Session iniciada');
				return Redirect::to('/');
			} else {
				Session::flash('message','Error de credenciales');
				return Redirect::to('login');

			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		Session::flash('message','Sesion finalizada');
				return Redirect::to('');
	}

}