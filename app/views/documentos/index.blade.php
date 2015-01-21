@extends('vistaBase2')
@section('content')

	<div class="row"> 
	    <div class="col-md-12">
			<h4><strong>Documentos</strong></h4>
			<p><a href="{{route('admin_new_documentos')}}" class="btn btn-xs btn-warning"> Agregar</a></p>
			<hr>
			
			<table class="table table-striped ">
			<thead>
			<tr>
				<th>Creado</th>
				<th>Descripción</th>
				<th>Área</th>
				<th>Descargar</th>
				<th>Link</th>
				<th style="width:10%"><th>
			</tr>
			</thead>

			<tbody>	

				@foreach ($documentos as $doc)

					<tr>
						<td>{{ $doc->fecha_alta }}</td>	
						<td>{{ $doc->descripcion }}</td>
						<td>{{ $doc->Area->area }}</td>
						<td><a href="{{route('download_documentos', $doc->id )}}">{{ $doc->titulo }}</a></td>
						<td> 
							<a href="{{$doc->link}}">{{$doc->link}}</a>
						</td>
						<td> 
							<div class="btn-group btn-group-xs" role="group"> 
								<a  title="editar" class="btn  btn-success"  href="{{route('admin_edit_documentos', Crypt::encrypt($doc->id))}}"><i class="glyphicon glyphicon-pencil"></i></a>
								<a  title="eliminar" class=" delete btn btn-danger" href="{{route('admin_delete_documentos', Crypt::encrypt($doc->id))}}" ><i class="glyphicon glyphicon-remove"></i></a>
							</div>
						</td>
					</tr>
					
				@endforeach

			</tbody>
			</table>
		</div>
		{{$documentos->links()}}
	</div>

@stop

