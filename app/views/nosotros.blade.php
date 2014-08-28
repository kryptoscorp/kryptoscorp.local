@extends('layouts.master')

@section('title')
@parent
:: Nosotros
@stop

@section('content')
  <div class="row">
    <div class="col-md-4" style="padding-left:0;">
    {{ HTML::image ('img/suit.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
  </div><br>
    <div id="myCarousel" class="carousel slide col-md-8" data-ride="carousel" style="max-width: 540px; margin: 0 auto; padding:0">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li class="active" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="" data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="img/car_gradient.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:20px">
              <h1 align="left">Mision</h1>
              <p align="justify"><strong>Proporcionar a nuestros clientes servicios de consultoría y capacitación de calidad, mediante un pilar sólido de estudios e investigación que van de la mano con los valores de la corporación.</strong></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img src="img/car_gradient.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:20px">
              <h1 align="left">Vision</h1>
              <p align="justify"><strong>Ser una empresa referente de capacitación y consultoria. Siempre teniendo en cuenta nuestro compromiso con el cliente, persiguiendo la excelencia sin dejar de lado la etica y la honestidad necesarias en un equipo profesional de primer nivel.</strong></p>
            </div>
          </div>
        </div>
        <div class="item">
         <img src="img/car_gradient.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption" style="margin-bottom:20px">
              <h1 align="left">Nuestro equipo</h1>
              <p align="justify"><strong>Contamos con profesionales de primer nivel, especialistas en capacitación y consultoría que garantizan una visión integral para todos los proyectos.</strong> </p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </div>
	
@stop