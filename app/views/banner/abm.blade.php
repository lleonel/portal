@extends('vistaBase2')

@section('content')


	<div class="row-fluid">
    	<div class="span2">	
			<h3>Banner</h3>
			<p><a href="admin/banner"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/banner/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">

    		<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    			<fieldset>
    				<legend>Formulario Banner</legend>
    				

    				<div class="control-group">
    					<label class="control-label" for="fileInput">Imagen</label>
    					<div class="controls">
    						<input class="input-file" id="fileInput" type="file" name="imagen"  >
                            <div>400 x 100 (px)</div>
    					</div>
    				</div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Link</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="link" maxlength="20" placeholder="link">
                        </div>
                    </div>

    				


    				<div class="form-actions">

						<button type="submit" class="btn">Grabar</button>
						<button type="button" class="btn btn-danger">Cancelar</button>

    				</div>

    			</fieldset>
    		</form>               

@stop