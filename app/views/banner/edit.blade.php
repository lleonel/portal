@extends('vistaBase2')

@section('content')

	<div class="row-fluid">
    	<div class="span2">	
			<h3>Novedades</h3>
			<p><a href="admin/banner"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/banner/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">

    			<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    			<fieldset>
    				<legend>Formulario banner</legend>
    				

    				
    				<div class="control-group">
    					<div class="controls">
    					<ul class="thumbnails">
    						<li class="span2">
    							<a class="thumbnail" href="#">
    								<img src="uploads/banner/{{ $data->imagen }}" alt="">
    							</a>
    						</li>
    					</ul>
    					</div>
    					<label class="control-label" for="fileInput">Imagen</label>

    					<div class="controls">
    						<input class="input-file" id="fileInput" type="file" name="imagen" >

    					</div>
    				</div>

                     <div class="control-group">
                        <label class="control-label" for="input01">Link</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="link" value="{{$data->link}}">
                        </div>
                    </div>


    				<div class="form-actions">

						<button type="submit" class="btn">Grabar</button>
						<button type="button" class="btn btn-danger">Cancelar</button>

    				</div>

    			</fieldset>
    		</form>     
      
   		 </div>
  </div>

@stop