<div class="control-group">
    {{ Form::label('fecha_alta', 'Fecha', array('class' => 'control-label')) }}
	<div class="controls">
        {{ Form::text('fecha_alta', Input::old('fecha_alta'), array('id' => 'datepicker', 'placeholder' => 'dd-mm-yyyy')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('file', 'Documento', array('class' => 'control-label')) }}
	<div class="controls">
        {{ Form::file('file') }}
	</div>
</div>

<div class="control-group">
    {{ Form::label('titulo', 'Título', array('class' => 'control-label')) }}
	<div class="controls">
        {{ Form::text('titulo', Input::old('titulo'), array('placeholder' => 'Título Principal')) }}
	</div>
</div>

<div class="control-group">
	{{ Form::label('link', 'Link', array('class' => 'control-label')) }}
	<div class="controls">		
        {{ Form::url('link', Input::old('link'), array('placeholder' => 'http://www.Link.com')) }}
	</div>
</div>

<div class="control-group">
    {{ Form::label('id_area', 'Área', array('class' => 'control-label')) }}
    <div class="controls">
        {{ Form::select('id_area', $areas, Input::old('id_area'), array('class' => 'form-control')) }}
        <!-- Button to trigger modal -->
        <a data-toggle="modal" class="btn btn-info" href="admin/areas/new" data-target="#myModal"><i class="icon-plus"></i></a>

    </div>
</div>


<div class="form-actions">
    {{ Form::submit('Guardar', array('class' => 'btn')) }}
</div>


    <!-- Modal -->
    <div id="myModal" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <div class="row-fluid">


        </div>    
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary">Save changes</button>
    </div>
    </div>
