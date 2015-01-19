
 <base href="{{ asset('') }}">
    <link href="packages/bootstrap/css/bootstrap_fer.css" rel="stylesheet">
    <link href="packages/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    
    <div class="modal" id="myModal">
       
        <div class="modal-header" style="background-color:333333;">
            <a href="/" class="brand"><img src="css/img/logo_administrador.png" width="152" height="25" ></a>
            <a class="close" data-dismiss="modal"></a>
        </div>

        <div class="modal-body">

            {{ Form::open(array('url' => 'login','class' => 'form-horizontal')) }}
            <fieldset>
            
            <legend>
                <h4>Ingresar</h4>
                <h6>Ingresa tu mismo Usuario y Contraseña de Inicio a tu Pc para poder acceder al Portal.</h6>
            </legend>
            
            <label>Usuario</label>
        
            {{ Form::text('username', null, array('placeholder'=>'Usuario',  'style'=>'height:30px'))}}
            
            <label>Contraseña</label>
            {{ Form::password('password', array('placeholder'=>'Contraseña', 'style'=>'height:30px' ))}}

            
            </fieldset>
            <hr>

             {{Form::captcha()}}   

            @if ($errors->count() > 0)
                <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

        </div>    


        <div class="modal-footer">
             {{ Form::submit('Ingresar',array('class'=>'btn btn-primary')); }}
            {{ Form::close() }}
        </div>  

    </div>

    <script type="text/javascript" charset="utf-8" src="packages/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" charset="utf-8" src="packages/bootstrap/js/bootstrap.js"></script>
    


