@extends('vistaBase2')

@section('content')

	<div class="row-fluid">
    	<div class="span2">	
			<h3>Novedades</h3>
			<p><a href="admin/novedades"><i class="icon-th-list"></i> Lista </a></p>
			<p><a href="admin/novedades/new"><i class="icon-plus"></i> Agregar  </a></p>		
    	</div>
    
    	<div class="span10">

            @if(isset($novedad))
                {{Form::model($novedad, array('enctype'=>'multipart/form-data'))}}
                    <div class="span2">
                        <a href="#" class="thumbnail">
                            <img src="uploads/novedades/{{$novedad->imagen}}" alt="">
                        </a>
                    </div>
            @else
                {{Form::open(array('enctype'=>'multipart/form-data'))}}
            @endif

                {{Form::date('fecha_alta')}}
                {{Form::texto('titulo')}}
                {{Form::text('encabezado')}}
                {{Form::edit('cuerpo')}}
                {{Form::submit()}}

                {{Form::close()}}  
   		 </div>
  </div>

@stop