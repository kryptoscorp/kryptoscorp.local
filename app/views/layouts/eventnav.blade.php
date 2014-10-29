<div class="row">
	<a class="btn btn-sm btn-primary" href="{{ URL::to('backend') }}">Administración</a>
	<a class="btn btn-sm btn-primary" href="{{ URL::to('events') }}">Lista eventos</a>
	@if ($admin)
	<a class="btn btn-sm btn-primary" href="{{ URL::to('events/create') }}">Crear evento</a>
	@endif
</div>