
<div class="control-group">
    {{ Form::label('area', 'Área', array('class' => 'control-label')) }}
	<div class="controls">
        {{ Form::text('area', Input::old('area'), array('placeholder' => 'Nombre Area')) }}
	</div>
</div>
<div class="form-actions">
    {{ Form::submit('Guardar', array('class' => 'btn')) }}
</div>