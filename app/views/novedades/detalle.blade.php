@extends('vistaBase2')

@section('content')

<div class="media">
	<a class="pull-left" href="#">
		<img class="media-object thumbnail" src="uploads/novedades/{{$novedad->imagen}}" alt="Image">
	</a>
	<div class="media-body">
		<h2 class="media-heading">{{$novedad->titulo}}</h2>
		<strong>{{$novedad->encabezado}}</strong>
		<hr>

	</div>
			<p>{{$novedad->cuerpo}}</p>
</div>

@endsection

@stop
