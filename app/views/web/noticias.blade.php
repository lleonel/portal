@extends('web.templateWeb')
@section('content')
				    <article class="post single">
				      <div class="post-offset">
					    	<h6>&nbsp;</h6>
					    	<p>Sección que permite leer todas las noticias del Portal.</p>
					    	
					    	<h2>Noticias</h2>

					
					    	<form action="novedades/buscar" method="post">
							<input type="text" name="buscar" placeholder="Buscar Noticia...">
					    	</form>

	                        <div class="table-responsive">
						    	<table>
						    		<thead>
						    			<tr>
						    				<th>Fecha Creacion</th>
						    				<th>Titulo Noticia</th>
						    				
						    			</tr>
						    		</thead>
						    		<tbody>
						    			@foreach ($novedades as $novedad)
					  <tr>
												<td>{{$novedad->fecha_alta}}</td>					
												<td><a href="novedades/{{Crypt::encrypt($novedad->id)}}" title="">{{$novedad->titulo}}</a></td>
												
												
											</tr>
	@endforeach
						 
						    			
						    			
						    		</tbody>
						    	</table>
					   		</div>
					    	<h2>&nbsp;</h2>
						</div>
				    </article><!-- /post -->

@endsection		  