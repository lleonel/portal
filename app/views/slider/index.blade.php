@extends('vistaBase2')

@section('content')

	

	<div class="row-fluid">
    <div class="span2">
			
	
	<h3>Slider</h3>

	<p><a href="admin/slider"><i class="icon-th-list"></i> Lista </a></p>
	<p><a href="admin/slider/new"><i class="icon-plus"></i> Agregar  </a> </p>
			
    </div>
    
    <div class="span10">
		
		<table class="table table-striped table-bordered dataTable" id="grid">
		<thead class="success">
			<tr>
				<th  class="span2">imagen</th>
				<th>Título</th>
				<th>Decripcion</th>
				<th class="span1"></th>
			</tr>
		</thead>

		<tbody>	

		@foreach ($data as $datas)

		<tr class="odd_gradeX">
	
		<td >
		<div class="row span10">
		<a class="thumbnail" href="uploads/slider/{{ $datas->imagen }}" >
		<img  src="uploads/slider/{{ $datas->imagen }}" alt="" width="100px" >
		</a>
		<p class="muted">{{ $datas->fecha}}</p>
		</div>
		</td>
		<td>
			<h5>{{ $datas->titulo }}</h5>
		</td>
		<td>
			<h5>{{ $datas->descripcion }}</h5>
		</td>

		<td> 
		<div class="btn-group">
		<a type="button" class="btn btn-mini "  onclick="if(!eliminar())return"  href="admin/slider/del/{{ Crypt::encrypt($datas->id) }}"  ><span class="icon-remove"></span>
		</a>
		<a type="button" class="btn btn-mini  " href="admin/slider/edit/{{ Crypt::encrypt($datas->id) }}"  ><span class="icon-pencil"></span>
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
