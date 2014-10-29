@extends('layouts.master')

@section('title')
@parent
:: Agregar evento
@stop
@section('content')
<div class="row">
	{{ HTML::ul($errors->all()) }}
	{{ Form::open (array('url' => 'events',
						'class'=> 'form-horizontal col-md-8')) }}
		<fieldset>
			<legend>Registrar evento</legend>
				<div class="form-group">
						{{ Form::label('name','Nombre', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('consultores','Consultores', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::select('consultores',$consultores,null,['class' => 'form-control']) }}	
					</div>
					
				</div>

				<div class="form-group">
					{{ Form::label('fecha_inicio','Inicio', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('fecha_inicio', Input::old('fecha_inicio'), array('class' => 'form-control calendar', 'Placeholder'=> 'Fecha de inicio')) }}	
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('fecha_final','Final', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('fecha_final', Input::old('fecha_inicio'), array('class' => 'form-control calendar', 'Placeholder'=> 'Fecha de culminación')) }}	
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('fecha_cobro','Pago', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('fecha_cobro', Input::old('fecha_inicio'), array('class' => 'form-control calendar', 'Placeholder'=> 'Fecha de pago')) }}	
					</div>
				</div>
				
				{{ Form::submit('Registrar evento', array('class' => 'btn btn-primary btn-sm col-lg-offset-3'))}}
		</fieldset>
		
	{{ Form::close() }}
</div>
	
@stop