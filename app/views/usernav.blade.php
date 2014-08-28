<div class="row">
	<a class="btn btn-sm btn-primary" href="{{ URL::to('users') }}">Lista usuarios</a>
	@if ($admin)
	<a class="btn btn-sm btn-primary" href="{{ URL::to('users/create') }}">Crear usuario</a>
	@endif
</div>
