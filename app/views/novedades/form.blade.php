@extends('vistaBase2')

@section('content')


<div class="row"> 
    <div class="col-xs-12">
    
    <h4><strong>Novedades</strong></h4>

    <hr>
    
            @if(isset($novedad))
                {{Form::model($novedad, array('enctype'=>'multipart/form-data'))}}
            @else
                {{Form::open(array('enctype'=>'multipart/form-data'))}}
            @endif

            {{Form::date('fecha_alta')}}
            {{Form::texto('titulo','Título')}}
            {{Form::texto('encabezado','Encabezado')}}
            {{Form::edit('cuerpo','Cuerpo Noticia')}}
            {{Form::imagen('imagen','Imagen')}}
            
            {{Form::submit('Guardar',array('class'=>'btn btn-success'))}}
            {{Form::close()}} 

   		 </div>
  </div>

@stop