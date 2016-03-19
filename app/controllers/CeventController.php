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
		if ((Auth::check()) and(Auth::user()->getAdmin()) ){
			$events = Cevent::all();
			return View::make('backend.events.index')->with('events',$events)->with('admin',Auth::user()->getAdmin());	
		}else {
			$id=Auth::id();
			$events = Cevent::where('user_id','=',$id)->get();
			//$posts = Post::has('comments')->get();
			$admin = false;
			//return var_dump($events);
			return View::make('backend.events.index')->with('events',$events)->with('admin',$admin);
		}
		
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
			'email_cliente' => 'required|email',
			'direccion' => 'required',
			'fecha_inicio' => 'required|date',
			'fecha_final' => 'required|date',
			'fecha_cobro' => 'required|date',
		);
		$validator = Validator::make(Input::all(),$rules);
		$consultor = User::find(Input::get('consultores'));
		if ($validator -> fails()){
			return Redirect::to('events/create') -> withErrors($validator) -> withInput (Input::except('password'));
		} else {
			//store
			$event = new Cevent;
			$event -> name = Input::get('name');
			$event -> users()->associate($consultor);
			$event -> email_cliente = Input::get('email_cliente');
			$event -> direccion = Input::get('direccion');
			$event -> comentarios = Input::get('comentarios');
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
		$cevent = Cevent::find($id);
		$cevent -> delete();

		Session::flash('message', 'Evento eliminado');
		return Redirect::to('events');
	}

	public function sendMail($id)
	{
		$cevent = Cevent::find($id)->toArray();
		$ceventRec = Cevent::find($id);
		$data = array(
			'evento'=> $ceventRec->name,
			'consultor'	=> $ceventRec->users->name,
			'direccion' => $ceventRec->direccion,
			'inicio' => $ceventRec->fecha_inicio,
			'fin' => $ceventRec->fecha_final,
		);
		Mail::send('emails.confirmacion', $data, function($message) use ($ceventRec) {
			$message->from('confirmacion@kryptoscorp.com');
			$message->to($ceventRec->email_cliente,'Estimado cliente')
			->cc($ceventRec->users->email)->cc('contacto@kryptoscrop.com')->subject('Confirmacion evento ' . $ceventRec->name);
		});
		$ceventRec -> confirmado = true;
		$ceventRec -> save();
		Session::flash('message','Correos de confirmacion enviado');
			return Redirect::to('events');
	}


}
