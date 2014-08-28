@extends('layouts.master')

@section('title')
@parent
:: Editar usuario
@stop

@section('content')
<div class="row">
	{{ Form::model ($user, array('class'=> 'form-horizontal col-md-8', 'method' => 'PUT', 'route' => array('users.update', $user -> id))) }}
		<fieldset>
			<legend>Editar usuario</legend>
				<div class="form-group">
						{{ Form::label('name','Nombre', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('name', null, array('class' => 'form-control')) }}
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('email','Email', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::email('email', null, array('class' => 'form-control')) }}	
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('password','Contraseña', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::password('password',array('class' => 'form-control')) }}

						@if ($admin)
							<div class="checkbox">
								<label class="col-lg-8">
									{{ Form::checkbox('admin',true,null) }}
									Administrador
								</label>
							</div>
						@endif
					</div>
				</div>
				

				<div class="form-group">
					{{ Form::label('phone','Número', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::text('phone', null, array('class' => 'form-control')) }}	
					</div>
				</div>

				<div class="form-group">
					{{ Form::label('direccion','Dirección', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::textarea('direccion', null, array('class' => 'form-control', 'rows' => '3')) }}
						<span class="help-block">Residencia.</span>
					</div>
				</div>


				<div class="form-group">
					{{ Form::label('comentarios','Comentarios', array('class' => 'col-lg-3 control-label')) }}
					<div class="col-lg-8">
						{{ Form::textarea('comentarios', null, array('class' => 'form-control', 'rows' => '3')) }}
						<span class="help-block">Actitudes.</span>
					</div>


				{{ Form::submit('Editar usuario', array('class' => 'btn btn-primary btn-sm col-lg-offset-3'))}}
		</fieldset>
		
	{{ Form::close() }}
</div>
@stop