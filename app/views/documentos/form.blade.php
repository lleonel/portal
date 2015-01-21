@extends('vistaBase2')

@section('content')

    <div class="row"> 
        <div class="col-xs-12">
            <h4><strong>Documentos</strong></h4>
            <hr>    
            @if(isset($documento))
                {{Form::model($documento, array('route' => array('admin_post_edit_documentos',Crypt::encrypt($documento->id)) , 'enctype'=>'multipart/form-data'))}}
            @else
                {{Form::open(array('route' => 'admin_post_new_documentos' ,'enctype'=>'multipart/form-data'))}}
            @endif

                {{Form::date('fecha_alta')}}
                {{Form::archivo('documento','Archivo')}}
                {{Form::texto('titulo','Nombre del Documento')}}
                {{Form::texto('descripcion','Descripcion')}}
                {{Form::texto('link','Link')}}
                {{Form::areas('id_area','Areas')}}

                {{Form::submit('Guardar',array('class'=>'btn btn-success'))}}
                {{Form::close()}} 
        </div>
    </div>

@stop


