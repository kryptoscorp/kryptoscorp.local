@extends('layouts.master')

@section('title')
@parent
:: Usuario
@stop

@section('content')
	<h2>{{ $user -> name }}</h2>
	<div class="jumbotron text-left">
		<p>
			<strong>Email:</strong> {{ $user -> email }}<br>
			@if ($user -> admin )
			<strong>Administrador</strong><br>
			@endif
			<strong>Número telefónico:</strong> {{ $user -> phone }}<br>
			<strong>Dirección:</strong> {{ $user -> direccion }}<br>
			<strong>Comentarios:</strong>{{ $user -> comentarios }}<br>
		</p>
	</div>
@stop