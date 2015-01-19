@if ($errors->count() > 0)
	<div class="alert alert-danger">
		Han ocurrido los siguientes errores:<br /><br />
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

@if (Session::has('success'))
	<div class="alert alert-success"><strong>Éxito:</strong><br />{{ Session::get('success') }}</div>
@endif

@if (Session::has('warning'))
	<div class="alert alert-warning"><strong>Alerta:  </strong><br />{{ Session::get('warning') }}</div>
@endif