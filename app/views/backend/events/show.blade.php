@extends('layouts.master')

@section('title')
@parent
:: Eventos
@stop
@section('content')
	<h2>{{ $event -> name }}</h2>
	<div class="jumbotron text-left">
		<p>
			<strong>Consultor:</strong> {{$event->users->name }}<br>
			<strong>Email cliente:</strong>{{ $event -> email_cliente }}<br>
			<strong>Dirección:</strong>{{ $event -> direccion }}<br>
			@if ($event -> comentarios <> null)
				<strong>Comentarios:</strong>{{ $event -> comentarios }}<br> 
			@endif 
			<strong>Fecha inicio:</strong> {{ $event -> fecha_inicio }}<br>
			<strong>Fecha culminación:</strong> {{ $event -> fecha_final }}<br>
			<strong>Fecha cobro:</strong>{{ $event -> fecha_cobro }}<br>
		</p>
	</div>
@stop