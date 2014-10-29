@extends('layouts.master')

@section('title')
@parent
:: Eventos
@stop
@section('content')
	<h2>{{ $event -> name }}</h2>
	<div class="jumbotron text-left">
		<p>
			<strong>Nombre:</strong> {{ $event -> name }}<br>
			<strong>Consultor:</strong> {{$event->users->name }}<br>
			<strong>Fecha inicio:</strong> {{ $event -> fecha_inicio }}<br>
			<strong>Fecha culminación:</strong> {{ $event -> fecha_final }}<br>
			<strong>Fecha cobro:</strong>{{ $event -> fecha_cobro }}<br>
		</p>
	</div>
@stop