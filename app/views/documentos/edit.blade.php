@extends('vistaBase2')

@section('content')

	<div class="row-fluid">
    	<div class="span2">	
			<h3>Documentos</h3>
			<p><a href="admin/documentos"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/documentos/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">




    	         <!-- Form starts.  -->
				
            {{ Form::model($documento, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
			{{-- <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"> --}}

    			<fieldset>
    				<legend>Formulario Documentos</legend>

    				@include('documentos.partials.form.graldata')

    				
    			</fieldset>
    		
            {{ Form::close() }}

					
        </div>
      </div>
      
  
@stop