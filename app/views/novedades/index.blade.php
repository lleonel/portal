@extends('vistaBase2')

@section('content')

	

	<div class="row">
	
		
    
    <div class="col-md-12">
	
	<h4><strong>Novedades</strong></h4>

	<p><a href="admin/novedades/new" class="btn btn-xs btn-warning"> Agregar</a></p>
	<hr>
	
		@foreach ($novedades as $novedad)
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<div class="thumbnail">
				<img src="uploads/novedades/{{ $novedad->imagen }}" alt="">
			<div class="caption">
				<small>{{$novedad->fecha_alta}}</small>
			<h3>{{substr($novedad->titulo ,0 , 50)}}...</h3>
			<p>
			<a  onclick="if(!eliminar())return"  href="admin/novedades/del/{{ Crypt::encrypt($novedad->id) }}"class="btn btn-primary">Editar</a>
			<a 	href="admin/novedades/edit/{{ Crypt::encrypt($novedad->id) }}"  class="btn btn-default">Eliminar</a>
			</p>
			</div>
			</div>
			</div>

			
	
		@endforeach

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
