@extends('layouts.master')

@section('title')
@parent
:: Ventas
@stop

@section('content')
<div class="row">
	<div class="col-md-4">
		{{ HTML::image ('img/78_Packages-en-Oracle.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
	<div class="col-md-8 text-justify">
		<br>
		<p>Obtenga el mejor software del mercado, marcando la diferencia en estabilidad, condianza y seguridad, Oracle ofrece software de la mas alta calidad. Obtenga licencias de software Oracle <a class="text-info" href="{{ URL::to('contacto') }}">comunicandose con nosotros.</a></p>
		<div class="col-md-8 col-md-offset-2">
			{{ HTML::image ('img/f813c3c5c56923b.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
		</div>
	</div>
	<br>
</div>

<div class="row">
	<div class="col-md-6">
			{{ HTML::image ('img/ID-100154315.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
	<div class="col-md-6 text-justify">
		<p>Ofrecemos venta de servidores y estaciones de trabajo con las respectivas licencias de sistema operativo como windows server y el antivirus de su preferencia.</p>
		<p>Si deseas ponerte en contacto con nosotros  <a class="text-info" href="{{ URL::to('contacto') }}">envianos un mensaje.</a></p>
		<div>
		</div>
	</div>
	
</div>
@stop