@extends('vistaBase2')

@section('content')


	<div class="row-fluid">
    	<div class="span2">	
			<h3>Novedades</h3>
			<p><a href="admin/novedades"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/novedades/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">


                {{Form::open()}}
                    {{Form::date('fecha_alta')}}
                    {{Form::text('titulo')}}
                    {{Form::text('encabezado')}}
                    {{Form::edit('cuerpo')}}
                    {{Form::submit()}}
                {{Form::close()}}

    		<form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
    			<fieldset>
    				<legend>Formulario Novedades</legend>
    				

    				<div class="control-group">
    					<label class="control-label" for="input01">Fecha</label>
    					<div class="controls">
    						<!--<input type="text" class="datepicker" name="fecha" placeholder="mm/dd/yyyy">-->
                            {{Form::date('fecha')}}
                            {{Form::areas('area')}}
    					</div>
    				</div>



    				<div class="control-group">
    					<label class="control-label" for="fileInput">Imagen</label>
    					<div class="controls">
    						<input class="input-file" id="fileInput" type="file" name="file" >

    					</div>
    				</div>


    				<div class="control-group">
    					<label class="control-label" for="input01">Titulo</label>
    					<div class="controls">
    						<input type="text" class="input-xlarge" id="input01" name="titulo">
    					</div>
    				</div>



    				<div class="control-group">
    					<label class="control-label" for="input01">Encabezado</label>
    					<div class="controls">		
    						<input type="text" class="input-xlarge" id="input01" name="encabezado">
    					</div>
    				</div>

    				<div class="control-group">
    					<label class="control-label" for="input01">Cuerpo</label>
    					<div class="controls">
    						<textarea class="form-control" placeholder="Limite 275 Caracteres" name="cuerpo" ></textarea>
    					</div>
    				</div>

    				<div class="form-actions">

						<button type="submit" class="btn">Grabar</button>
						<button type="button" class="btn btn-danger">Cancelar</button>

    				</div>
    			</fieldset>
    		</form>             

@stop