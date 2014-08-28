@extends('layouts.master')

@section('title')
@parent
:: Servicios
@stop

@section('content')
<div class="row">

	<div class="col-md-4">
		{{ HTML::image ('img/ID-10058008.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
	<div class="col-md-8 text-justify">
		<h2>Cursos de capacitación</h2>
		<br>
		<p>Cursos de capacitación en software Oracle sistemas operativos Unix y desarrollo de aplicaciones (PHP, Java, PL/SQL).</p> 
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-8 text-justify">
		<h2>Soporte técnico y CCTV</h2>
		<br>
		<p>Soluciones generales en mantenimiento de redes, equipos de oficina o servidores (windows o linux) y camaras de seguridad; respuesta presencial o remota con personal capacitado.</p> 
	</div>
	<div class="col-md-4">
		{{ HTML::image ('img/ID-100207058.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-4">
		{{ HTML::image ('img/ID-100152865.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
	</div>
	<div class="col-md-8 text-justify">
		<h2>Desarrollo de aplicaciones</h2>
		<br>
		<p>Programación en ambiente Java y desarrollo de aplicaciones web en PHP con diseño adaptable a dispositivos moviles. Trabajamos con el framework Laravel y plantillas bootstrap.</p>
	</div>
	</div>
	
@stop