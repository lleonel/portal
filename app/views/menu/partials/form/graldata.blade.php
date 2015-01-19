
<div class="control-group">
    {{ Form::label('menuLabel', 'Menú', array('class' => 'control-label')) }}
	<div class="controls">
        {{ Form::text('menu', Input::old('menu'), array('placeholder' => 'Nombre Menu')) }}
	</div>
</div>

<div class="control-group">
    {{ Form::label('menuLink', 'link', array('class' => 'control-label')) }}
	<div class="controls">
        {{ Form::text('link', Input::old('link'), array('placeholder' => 'Link Menu')) }}
	</div>
</div>


<div class="form-actions">
    {{ Form::submit('Guardar', array('class' => 'btn')) }}
</div>