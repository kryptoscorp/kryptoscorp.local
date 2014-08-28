@extends('layouts.master')

@section('title')
@parent
:: Contacto
@stop

@section('content')
<div class="row">
	{{ HTML::ul($errors->all()) }}
	{{ Form::open (array('url' => 'contacto',
						'class'=> 'form-horizontal col-md-8')) }}
		<fieldset>
			<legend>Comunícate con nosotros</legend>
				<div class="form-group">
					{{ Form::label('name','Nombre', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('email','Email', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}	
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('message','Mensaje', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '3')) }}
						<span class="help-block">Escribe tu mensaje.</span>
					</div>
				</div>
				
				{{ Form::submit('Enviar mensaje', array('class' => 'btn btn-primary col-lg-offset-3'))}}
		</fieldset>
	{{ Form::close() }}
	<div class="col-md-4">
		{{ HTML::image ('img/logo_Kryptos_equipos.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
</div>

@stop