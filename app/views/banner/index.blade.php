@extends('vistaBase2')

@section('content')

	

	<div class="row-fluid">
    <div class="span2">
			
	
	<h3>Banner</h3>

	<p><a href="admin/banner"><i class="icon-th-list"></i> Lista </a></p>
	<p><a href="admin/banner/new"><i class="icon-plus"></i> Agregar  </a> </p>
			
    </div>
    
    <div class="span10">
		
		<table class="table table-striped table-bordered dataTable" id="grid">
		<thead class="success">
			<tr>
				<th  class="span2">imagen</th>
				<th>Link</th>
				<th class="span1"></th>
			</tr>
		</thead>

		<tbody>	

		@foreach ($data as $datas)

		<tr class="odd_gradeX">
	
		<td >
			<div class="row span10">
				<a class="thumbnail" href="uploads/banner/{{ $datas->imagen }}" >
					<img  src="uploads/banner/{{ $datas->imagen }}" alt="" width="100px" >
				</a>
			</div>
		</td>

		<td>
			{{$datas->link}}	
		</td>

		<td> 
		<div class="btn-group">
		<a type="button" class="btn btn-mini "  onclick="if(!eliminar())return"  href="admin/banner/del/{{ Crypt::encrypt($datas->id) }}"  ><span class="icon-remove"></span>
		</a>
		<a type="button" class="btn btn-mini  " href="admin/banner/edit/{{ Crypt::encrypt($datas->id) }}"  ><span class="icon-pencil"></span>
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
