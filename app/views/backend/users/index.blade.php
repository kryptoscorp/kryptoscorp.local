@extends('layouts.master')

@section('title')
@parent
:: Usuarios
@stop

@section('content')
<h2><i class="fa fa-users"> Usuarios</i></h2>
<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<td>Nombre</td>
				<td>Email</td>
				<td>Número</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $key => $value)
				<tr>
					<td>{{ $value->name }}</td>
					<td>{{ $value->email }}</td>
					<td>{{ $value->phone }}</td>
					<td>
						<div class="wrapper text-center">
						<div class="btn-group">
						<a style="margin-right: 3px" class="btn btn-sm btn-info pull-left" href="{{ URL::to ('users/' . $value->id)}}">Detalles</a>
						@if ($admin)
						<a class="btn btn-sm btn-info pull-left" href="{{ URL::to ('users/' . $value->id) . '/edit'}}">Editar</a>
						{{ Form::open(array('url' => 'users/' . $value -> id, 'method' => 'DELETE', 'class' => 'pull-left','style'=>'margin-left: 3px')) }}
							{{ Form::submit('Eliminar', array('class' => 'btn btn-sm btn-warning')) }}
						{{ Form::close() }}
						@endif
						</div>	
						</div>
						
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
	<!-- <a class="btn btn-sm btn-primary" href="{{ URL::to('users') }}">Lista usuarios</a>
	@if ($admin)
	<a class="btn btn-sm btn-primary" href="{{ URL::to('users/create') }}">Crear usuario</a>
	@endif -->
	@include('usernav', array('admin'=>$admin))
@stop