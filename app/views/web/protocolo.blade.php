@extends('web.templateWeb')


@section('content')
				    <article class="post single">
				      <div class="post-offset">
					    	<h6>&nbsp;</h6>
					    	<p>Sección que permite ver los Teléfonos de las Areas correspondientes.</p>
					    	
					    	<h2>Telefonos</h2>

							<!--
					    	<form action="novedades/buscar" method="post">
							<input type="text" name="buscar" placeholder="Buscar Noticia...">
					    	</form>
								-->
								
	                        <div class="table-responsive">
						    	




<div class="container-fluid">
	<div class="row-fluid">
		
	@foreach ($protocolo as $protoc)
		<div class="span4">
			<div class="col-lg-4">
                    <div class="panel panel-default">
							
							<div class="panel-heading">
								<h6>{{$protoc->areas_id->area}}</h6>
							</div>

							<div class="panel-body">

								<ul class="thumbnails">
									<li class="span4">
										<a class="thumbnail" href="#"><img src="uploads/protocolo/{{$protoc->foto}}" width="100"></a>
									</li>
								</ul>	<p>
								Cargo: {{$protoc->cargo}}<br>
								Apellido: {{$protoc->prefijo}} {{$protoc->apellido}}<br>
								Nombre: {{$protoc->nombre}}</br>
								Teléfono: {{$protoc->telefono}}<br>
								Dirección: {{$protoc->domicilio}}<br>
								Fax: {{$protoc->fax}}<br>
								Email: {{$protoc->email}}
							</div>
							
							<div class="panel-footer">

							<a data-href="qr/{{ $protoc->id }}" data-target="#mdlQr .modal-body" class="button-qr btn btn-default">Qr</a>

							</div>
                    </div>
                </div>
		</div>
	@endforeach
		
	</div>
</div>	
                       
					    	<h2>&nbsp;</h2>
						</div>
				    </article><!-- /post -->



						<div class="modal fade" id="mdlQr">
						<div class="modal-dialog">
							<div class="modal-content text-center">
								<div class="modal-body">
									
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
@endsection	