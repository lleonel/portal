@extends('vistaBase2')

@section('content')


	<div class="row-fluid">
    	<div class="span2">	
			<h3>Slider</h3>
			<p><a href="admin/slider"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/slider/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">

    		<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    			<fieldset>
    				<legend>Formulario Slider</legend>
    				

    				<div class="control-group">
    					<label class="control-label" for="input01">Fecha</label>
    					<div class="controls">
    						<input type="text" id="datepicker" name="fecha" placeholder="mm/dd/yyyy">
    					</div>
    				</div>


    				<div class="control-group">
    					<label class="control-label" for="fileInput">Imagen</label>
    					<div class="controls">
    						<input class="input-file" id="fileInput" type="file" name="file"  >
                            <div>1.090 x 383 (px)</div>
    					</div>
    				</div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Título</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="titulo" maxlength="20" placeholder="20 caracteres">
                        </div>
                    </div>

    				<div class="control-group">
    					<label class="control-label" for="input01">Descripción</label>
    					<div class="controls">
    						<input type="text" class="input-xlarge" id="input01" name="descripcion" maxlength="150" placeholder="150 caracteres">
    					</div>
    				</div>



    				<div class="form-actions">

						<button type="submit" class="btn">Grabar</button>
						<button type="button" class="btn btn-danger">Cancelar</button>

    				</div>

    			</fieldset>
    		</form>               

@stop