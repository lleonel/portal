@extends('vistaBase2')


@section('content')


	<div class="row-fluid">
    <div class="span2">
			
	
	<h3>Menu Web</h3>

	<p><a href="admin/menu"><i class="icon-th-list"></i> Listas </a></p>
	<p><a href="admin/menu/new"><i class="icon-plus"></i> Agregar  </a> </p>
			
    </div>
    
    <div class="span10">

    	@include('partials.msgs')

		<div class="tab-content">
			<div class="tab-pane active" id="1">
					<table class="table table-striped table-bordered dataTable" id="grid">
					<thead>
						<tr>
							<th>Menu</th>
							<th></th>
						</tr>
					</thead>

					<tbody>	
				
						@foreach ($menus as $menu)

						<tr class="odd_gradeX">
						<td>{{ $menu->menu }}
						</td>
						
						<td> 
							<div class="btn-group">
								<button type="button" class="btn btn-mini" onclick="modificar('{{Crypt::encrypt($menu->id)}}')"><span class="icon-pencil"></span></button>
								<button type="button" class="btn btn-mini" onclick="eliminar('{{Crypt::encrypt($menu->id)}}')"><span class="icon-remove"></span></button>
							</div>
						</td>
						
						@endforeach
					
					</tbody>
					</table>

			</div>
		</div>

	</div>

</div>

		

<script type="text/javascript">

	function modificar(id){

		 window.location.assign("admin/menu/edit/" + id);
	}

	function eliminar(id){

		if(confirm("Desde Eliminar el registro seleccionado?")){
		  window.location.assign("admin/menu/del/" + id);	  
		
		}
	} 
</script>

@stop

