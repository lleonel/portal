@extends('vistaBase2')


@section('content')

	<div class="row"> 
	    <div class="col-md-12">
			<h4><strong>Areas</strong></h4>
			<hr>
			<div class="btn-group btn-group-xs " aria-label="First group" role="group">
				<a href="{{route('admin_new_areas')}}" class="btn btn-warning"> <i class="glyphicon glyphicon-plus"></i> Agregar</a>
				<button id="del" class="btn  btn-danger" ><i class="glyphicon glyphicon-trash"></i> Eliminar</button>
				<button class="btn  " type="button"><i class="glyphicon glyphicon-print"></i> Imprimir</button>
			</div>
					
			
			<table class="table table-striped  ">
			<thead>
				<tr>
					<th></th>
					<th>Nro.</th>
					<th>Nombre Área</th>
					<th style="width:10%"><th>
				</tr>
			</thead>

			<tbody>	

				@foreach ($areas as $area)

					<tr>
						<td><input type="checkbox" data-id="{{$area->id}}" ></td>
						<td>{{ $area->id }}</td>
						<td>{{ $area->area }}</td>
						<td></td>
						
						<td> 
							<div class="btn-group btn-group-xs" role="group"> 
								<a  title="editar" class="btn btn-xs btn-success"  href="{{route('admin_edit_documentos', Crypt::encrypt($area->id))}}"><i class="glyphicon glyphicon-pencil"></i> Editar</a>
							</div>
						</td>
					</tr>
					
				@endforeach

			</tbody>
			</table>
		</div>
		{{$areas->links()}}
	</div>


		
    </div>
    
   

		

<script type="text/javascript">

	function  modificar(id){

		 window.location.assign("areas/edit/" + id);
	}

	function eliminar(id){

		if(confirm("Desde Eliminar el registro seleccionado?")){
		  window.location.assign("areas/del/" + id);	  
		
		}
	} 
</script>

@stop

