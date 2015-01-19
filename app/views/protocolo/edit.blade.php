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
                    <legend>Formulario Protocolo Telfónico</legend>
                


                    <div class="control-group">
                        <label class="control-label" for="fileInput">Foto</label>
                        <div class="controls">
                            <input class="input-file" id="fileInput" type="file" name="foto"  >

                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="input01">Prefijo</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="prefijo" value="{{$model->prefijo}}">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Apellido</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="apellido" value="{{$model->apellido}}">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Nombre</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="nombre" value="{{$model->nombre}}">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Área</label>
                        <div class="controls">

                        <select name="areas_id" >
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->area}}</option>
                            @endforeach    
                        </select>

                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="input01">Cargo</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="cargo" value="{{$model->cargo}}">
                        </div>
                    </div>



                    <div class="control-group">
                        <label class="control-label" for="input01">Domicilio</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="domicilio" value="{{$model->domicilio}}">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="input01">Teléfono</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="telefono" value="{{$model->telefono}}">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="input01">Celular</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="celular" value="{{$model->celular}}">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="input01">Fax</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="fax" value="{{$model->fax}}">
                        </div>
                    </div>


                    <div class="control-group">
                        <label class="control-label" for="input01">E-Mail</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" id="input01" name="email" value="{{$model->email}}">
                        </div>
                    </div>


                    <div class="form-actions">

                        <button type="submit" class="btn">Grabar</button>
                        <button type="button" class="btn btn-danger">Cancelar</button>

                    </div>

                </fieldset>
            </form>          
@stop