@extends('layouts.master')

@section('title')
@parent
:: Nosotros
@stop
@section('content')
  <div class="row">
    <div class="col-md-4">
    {{ HTML::image ('img/ID-100232334.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
    </div>
    <div class="col-md-8 text-justify">
      <h2>Misión</h2>
      <br>
      <p style="visibility: hidden" class="make-visible">
      Proporcionar a nuestros clientes servicios de consultoría y capacitación de calidad, mediante un pilar sólido de estudios e investigación que van de la mano con los valores de la corporación.
      </p> 
    </div>
  </div>
  <br>
  <div class="row">
  <div class="col-md-8 text-justify">
    <h2>Visión</h2>
    <br>
    <p style="visibility: hidden" class="make-visible">Ser una empresa referente de capacitación y consultoria. Siempre teniendo en cuenta nuestro compromiso con el cliente, persiguiendo la excelencia sin dejar de lado la ética y la honestidad, necesarias en un equipo profesional de primer nivel.</p> 
  </div>
  <div class="col-md-4">
    {{ HTML::image ('img/ID-100238671.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-4">
    {{ HTML::image ('img/ID-10069913.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
  </div>
  <div class="col-md-8 text-justify">
    <h2>Nuestro Equipo</h2>
    <br>
    <p style="visibility: hidden" class="make-visible">
    Contamos con profesionales de primer nivel, especialistas en capacitación y consultoría que garantizan una visión integral para todos los proyectos.</p>
  </div>
</div>
	
@stop


