@extends('vistaBase2')
@section('content')

	<div class="row-fluid">
    <div class="span2">
			
	
	<h3>Protocolo Telefónico</h3>

	<p><a href="admin/protocolo"><i class="icon-th-list"></i> Lista </a></p>
	<p><a href="admin/protocolo/new"><i class="icon-plus"></i> Agregar  </a> </p>
			
    </div>
    
    <div class="span10">

   
		
		<table class="table table-striped table-bordered dataTable" id="grid">
		<thead class="success">
			<tr>
				<th  class="span2"></th>
				<th>Apellido Nombre</th>
				<th>Área</th>
				<th>Datos</th>
				
				<th class="span1"></th>
			</tr>
		</thead>

		<tbody>	

		@foreach ($protocolo as $protocolos)

		<tr class="odd_gradeX">
	
			<td >
				<div class="row span10">
					<a class="thumbnail" href="uploads/protocolo/{{ $protocolos->foto }}" >
						<img  src="uploads/protocolo/{{ $protocolos->foto }}" alt="" width="100px" >
					</a>
				</div>
			</td>
			<td>
				<h5>{{ $protocolos->prefijo }} {{ $protocolos->apellido }} {{ $protocolos->nombre }}</h5>	
			</td>

			<td>
				{{ $protocolos->areas_id->area }} :  {{ $protocolos->cargo }} 
			</td>

			<td>
				<h6>  <small>Teléfono : </small>  <strong class="pull-right">{{ $protocolos->telefono }}</strong> </h6>
				<h6>  <small>Celular : </small>  <strong class="pull-right">{{ $protocolos->celular }}</strong> </h6>
				<h6>  <small>Fax : </small> <strong class="pull-right">{{ $protocolos->fax }}</strong> </h6>
				<h6>  <small>E-mail : </small> <strong class="pull-right">{{ $protocolos->email }}</strong> </h6>
				<h6>  <small>Domicilio: </small> <strong class="pull-right">{{ $protocolos->domicilio }}</strong> </h6>
			</td>

			<td> 
				<div class="btn-group">
					<a type="button" class="btn btn-mini "  onclick="if(!eliminar())return"  href="admin/protocolo/del/{{ Crypt::encrypt($protocolos->id) }}"  ><span class="icon-remove"></span>
					</a>
					<a type="button" class="btn btn-mini  " href="admin/protocolo/edit/{{ Crypt::encrypt($protocolos->id) }}"  ><span class="icon-pencil"></span>
					</a>
				</div>
			</td>

		@endforeach

		</tbody>
		</table>


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