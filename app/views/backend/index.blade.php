@extends('layouts.master')

@section('title')
@parent
:: Administración
@stop

@section('content')
<div class="row">
	@if ($admin)
	<a class="btn btn-sm btn-primary" href="{{ URL::to('users') }}"><i class="fa fa-users"> Administración de usuarios</i></a>
	<a class="btn btn-sm btn-primary" href="{{ URL::to('events') }}"><i class="fa fa-calendar"> Administración de eventos</i></a>
	@else
	<a class="btn btn-sm btn-primary" href="{{ URL::to('users') }}"><i class="fa fa-users"> Lista de usuarios</i></a>
	<a class="btn btn-sm btn-primary" href="{{ URL::to('events') }}"><i class="fa fa-calendar"> Lista de eventos</i></a>
	@endif
</div>

@stop