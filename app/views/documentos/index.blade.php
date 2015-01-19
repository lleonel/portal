@extends('vistaBase2')


@section('content')

	<div class="row-fluid">
    <div class="span2">
			
	
	<h3>Documentos</h3>

	<p><a href="admin/documentos"><i class="icon-th-list"></i> Listas </a></p>
	<p><a href="admin/documentos/new"><i class="icon-plus"></i> Agregar  </a> </p>
			
    </div>
    
    <div class="span10">

		<div class="tab-content">
			<div class="tab-pane active" id="1">
					<table class="table table-striped table-bordered dataTable" id="grid">
					<thead>
						<tr>
							<th>Creado</th>
							<th>Título</th>
							<th>Área</th>
							<th>Descargar</th>
							<th>Link</th>
							<th></th>

						</tr>
					</thead>

					<tbody>	
				
						@foreach ($documentos as $doc)

							<tr class="odd_gradeX">
								<td>{{ $doc->fecha_alta }}</td>	
								<td>{{ $doc->titulo }}</td>
								<td>{{ $doc->id_area }}</td>
								<td><a href="uploads/documentos/{{ $doc->documento }}">{{ $doc->documento }}</a></td>
								<td> 
									<a href="{{$doc->link}}">{{$doc->link}}</a>
								</td>
								<td> 

									<div class="btn-group">
										<a type="button" class="btn btn-mini"  onclick="modificar('{{Crypt::encrypt($doc->id)}}')" href="admin/documentos/edit/{{ Crypt::encrypt($doc->id) }}"><span class="icon-pencil"></span></a>

										<a type="button" class="btn"  onclick="if(!eliminar())return"   href="admin/documentos/del/{{ Crypt::encrypt($doc->id) }}" ><span class="icon-download"></span></a>
									</div>
								
								</td>
							</tr>
							
						@endforeach
					
					</tbody>
					</table>

			</div>
		</div>

	</div>

</div>

		

<script type="text/javascript">

		function eliminar(){
		if(confirm("Desde Eliminar el registro seleccionado?")){
		 // window.location.assign("novedades/del/" + id);	  
			return true;
		}else{
			return false;
		}
	} 
</script>

@stop

