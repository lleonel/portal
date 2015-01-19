@extends('vistaBase2')

@section('content')

	<div class="row-fluid">
    	<div class="span2">	
			<h3>Areas</h3>
			<p><a href="admin/areas"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/areas/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">

            @include('partials.msgs')


    	         <!-- Form starts.  -->
                @if ($action =="create")

                   {{ Form::open(array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) }}
               
                @else

                 {{ Form::model($areas, array('class' => 'form-horizontal')) }}

                  
                @endif
			
           

    			<fieldset>
    				<legend>Formulario Areas</legend>
                    
    				    @include('areas.partials.form.graldata')

    			</fieldset>
    		
            {{ Form::close() }}

					
        </div>
      </div>
      
  
@stop