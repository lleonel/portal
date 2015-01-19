@extends('web.templateWeb')
@section('content')
				    <article class="post single">
				      <div class="post-offset">
					    	<h6>&nbsp;</h6>
					    	<p>Sección que permite descargar los archivos necesarios, seleccione el area especifica para decargar.</p>
					    	
					    	<h2>Documentos</h2>

							<!--
					    	<form action="documentos/buscar" method="post">
							<input type="text" name="buscar" placeholder="Buscar Documento...">
					    	</form>
							-->


	                        <div class="table-responsive ">
						    	<table >
						    		<thead>
						    			<tr>
						    				<th>Creacion</th>
						    				<th>Nombre Archivo</th>
						    				<th>Area</th>
						    				<th>Descargar</th>
						    			</tr>
						    		</thead>
						    		<tbody>
						    			@foreach ($documentos as $documento)
						    		
											<tr>
												<td>{{$documento->fecha_alta}}</td>					
												<td>{{$documento->titulo}}<span class="pull-right badge">{{$documento->visita}}</span></td>
												<td>{{$documento->id_area}}</td>
												<td>
												
												<a href="{{ route('web_get_documentos_download', $documento->id) }}" class="btn" > <i class="icon-download"></i>  </a></td>
											</tr>

						    			@endforeach
						    			
						    			
						    		</tbody>
						    	</table>
					   		</div>
					    	<h2>&nbsp;</h2>
						</div>
				    </article><!-- /post -->

@endsection		  