<?php

	Form::macro('date', function($name)
		{
			$value = Form::getValueAttribute($name);

			return '<div class="form-group">
						<label>Fecha</label>
						<input type="text" class="datepicker form-control " name="'.$name.'" placeholder="dd/mm/yyyy" value="'.$value.'">
					</div>';
			//return '<input type="text" class="datepicker " name="'.$name.'" placeholder="dd/mm/yyyy" value="'.$value.'">';
		});

	Form::macro('areas', function($name)
		{
			$areas = Area::lists('area','id');
			return Form::select($name,$areas,array('class'=>'form-control')); 
		});

	Form::macro('edit', function($name,$label)
		{
			$value = Form::getValueAttribute($name);

			return '<div class="form-group">
						<label>'.$label.'</label>
						<textarea  name="'.$name.'" >'.$value.'</textarea>
					</div>';
		});

	Form::macro('texto', function($name, $label)
		{	
			$value = Form::getValueAttribute($name);
		
			return '<div class="form-group">
					  	<label>'.$label.'</label>
						<input type="text" class="form-control " name="'.$name.'"  value="'.$value.'">
					</div>';

		});

	Form::macro('imagen', function($name, $label)
		{	
			$value = Form::getValueAttribute($name);
			$thumb = "";

			if($value)
			{
				$thumb = '<div class="col-xs-2">
							<a href="#" class="thumbnail">
                        	<img src="uploads/novedades/'.$value.'" alt="">
             	       	 	</a>
             	       	 </div>';
			}
			
			return '<div class="col-xs-12 form-group">
						'.$thumb.' 
						<label>'.$label.'</label>
						<input type="file"  name="'.$name.'" >
					</div>';

		});

	
?>