<?php

	Form::macro('date', function($name)
		{
			$value = Form::getValueAttribute($name);

			return '<div class="form-control">
						<input type="text" class="datepicker " name="'.$name.'" placeholder="mm/dd/yyyy" value="'.$value.'">
					</div>';
		});

	Form::macro('areas', function($name)
		{
			$areas = Area::lists('area','id');
			return Form::select($name,$areas,array('class'=>'form-control')); 
		});

	Form::macro('edit', function($name)
		{
			$value = Form::getValueAttribute($name);
			return '<div class="form-control">
						<textarea  name="'.$name.'" >'.$value.'</textarea>
					</div>';
		});

	Form::macro('texto', function($name)
		{	
			$value = Form::getValueAttribute($name);
			return '<div class="form-control">
						<input class="form-control" name="'.$name.'" value='.$value.'>
					</div>';
		});

	
?>