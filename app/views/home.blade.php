@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
<div class="row">
	<div>
		{{ HTML::image ('img/Logo_Kryptos_original.jpg','Responsive image', array('class' => 'img-responsive img-rounded')) }}
		<h2 id="animate_h2" style="margin-right: 40px; visibility: hidden" class="text-right make-visible">La solución simple</h2>
	</div>
</div>
@stop


