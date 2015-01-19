@extends('vistaBase2')

@section('content')


	<div class="row-fluid">
    	<div class="span2">	
			<h3>Novedades</h3>
			<p><a href="admin/novedades"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/novedades/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">

    		<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    			<fieldset>
    				<legend>Formulario Protocolo Telefónico</legend>
    			


    				<div class="control-group">
    					<label class="control-label" for="fileInput">Foto</label>
    					<div class="controls">
    						<input class="input-file" id="fileInput" type="file" name="foto" >

    					</div>
    				</div>
                    
                    <div class="control-group">
                        <label class="control-label" for="input01">Prefijo</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="prefijo">
                        </div>
                    </div>

    				<div class="control-group">
    					<label class="control-label" for="input01">Apellido</label>
    					<div class="controls">
    						<input type="text" class="input-xlarge" id="input01" name="apellido">
    					</div>
    				</div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Nombre</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="nombre">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Área</label>
                        <div class="controls">

                        {{ Form::select('area_id', $areas)}}

                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="input01">Cargo</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="cargo">
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="input01">Domicilio</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="domicilio">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="input01">Teléfono</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="telefono">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Celular</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="celular">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="input01">Fax</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="fax">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="input01">E-Mail</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="email">
                        </div>
                    </div>


    				<div class="form-actions">

						<button type="submit" class="btn">Grabar</button>
						<button type="button" class="btn btn-danger">Cancelar</button>

    				</div>

    			</fieldset>
    		</form>               

@stop