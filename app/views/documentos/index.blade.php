@extends('vistaBase2')
@section('content')

	<div class="row"> 
	    <div class="col-md-12">
			<h4><strong>Documentos</strong></h4>
			<hr>
			<div class="btn-group btn-group-xs " aria-label="First group" role="group">
				<a href="{{route('admin_new_documentos')}}" class="btn btn-warning"> <i class="glyphicon glyphicon-plus"></i> Agregar</a>
				<button id="del" class="btn  btn-danger" ><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
				<button class="btn  " type="button"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
			</div>
					
			
			<table class="table table-striped ">
			<thead>
			<tr>
				<th></th>
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
						<td><input type="checkbox" data-id="{{$doc->id}}" ></td>
						<td>{{ $doc->fecha_alta }}</td>	
						<td>{{ $doc->descripcion }}</td>
						<td>{{ $doc->Area->area }}</td>
						<td><a href="{{route('download_documentos', $doc->id )}}">{{ $doc->titulo }}</a></td>
						<td> 
							<a href="{{$doc->link}}">{{$doc->link}}</a>
						</td>
						<td> 
							<div class="btn-group btn-group-xs" role="group"> 
								<a  title="editar" class="btn btn-xs btn-success"  href="{{route('admin_edit_documentos', Crypt::encrypt($doc->id))}}"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
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

