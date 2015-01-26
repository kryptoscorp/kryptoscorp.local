@extends('layouts.master')

@section('title')
@parent
:: Eventos
@stop

@section('content')
<h2><i class="fa fa-calendar"> Eventos</i></h2>
<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed">
		<thead>
			<tr>
				<td>Nombre</td>
				<td>Consultor</td>
				<td>Fecha inicio</td>
				<td>Fecha culminación</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($events as $key => $value)
				<tr>
					<td>{{ $value->name }}</td>
					<td>{{ $value->users->name }}</td>
					<td>{{ $value->fecha_inicio }}</td>
					<td>{{ $value->fecha_final }}</td>
					<td>
						<div class="wrapper text-center">
						<div class="btn-group">
						@if ($value->confirmado)
						<a style="margin-right: 3px" class="btn btn-sm btn-info pull-left" href="{{ URL::to ('confirmacion/' . $value->id)}}">Confirmar</a>
						@endif
						<a style="margin-right: 3px" class="btn btn-sm btn-info pull-left" href="{{ URL::to ('events/' . $value->id)}}">Detalles</a>
						@if ($admin)
						<a class="btn btn-sm btn-info pull-left" href="{{ URL::to ('events/' . $value->id) . '/edit'}}">Editar</a>
						{{ Form::open(array('url' => 'events/' . $value -> id, 'method' => 'DELETE', 'class' => 'pull-left','style'=>'margin-left: 3px')) }}
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
@include('layouts.eventnav', array('admin'=>$admin))
@stop