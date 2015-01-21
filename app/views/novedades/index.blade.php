@extends('vistaBase2')
@section('content')

	<div class="row"> 
	    <div class="col-md-12">
			<h4><strong>Novedades</strong></h4>
			<p><a href="{{route('admin_new_novedades')}}" class="btn btn-xs btn-warning"> Agregar</a></p>
			<hr>
			
				@foreach ($novedades as $novedad)
					<div class="col-xs-3">
						<div class="thumbnail">
							<img src="uploads/novedades/{{$novedad->imagen}}" style="height:150px;">
							<div class="caption">
								<small>{{$novedad->fecha_alta}}</small>
								<a href="admin/novedades/detalle/{{$novedad->id}}" ><h4>{{substr($novedad->titulo ,0 , 70)}}...</h4></a>
								<p>
									<a 	href="{{route('admin_edit_novedades', Crypt::encrypt($novedad->id))}}" class="btn btn-xs btn-default">Editar</a>
									<a  href="{{route('admin_delete_novedades', Crypt::encrypt($novedad->id))}}"  class=" delete btn btn-xs btn-danger">Eliminar</a>
								</p>
							</div>
						</div>
					</div>
				@endforeach
		</div>
		{{$novedades->links()}}
	</div>
@stop
