<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', 'KryptosController@showHome');

 //array('uses'=>'ContentController@index', 'as'=>'content'))

Route::get('nosotros',array('uses'=>'KryptosController@showNosotros','as'=>'nosotros'));

Route::get('servicios', array('uses'=>'KryptosController@showServicios','as'=>'servicios'));

Route::get('ventas',array ('uses'=>'KryptosController@showVentas','as'=>'ventas'));

Route::get('contacto',array ('uses'=>'KryptosController@showContacto','as'=>'contacto'));

Route::post('contacto',array ('uses'=>'KryptosController@sendMail'));


Route::group(array('before'=>'auth'), function(){
	Route::resource('users','UserController');
});

Route::group(array('before'=>'admin'), function(){
	Route::resource('users','UserController', array('only'=> array('create','store','edit','update','destroy')));	
});


Route::group(array('after'=>'auth'), function(){
	Route::get('login', array('uses'=>'LoginController@showLogin'));

	Route::post('login', array('uses'=>'LoginController@doLogin'));
});	
Route::group(array('before'=>'auth'), function(){
	Route::get('logout', array('uses'=>'LoginController@doLogout'));
});





