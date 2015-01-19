<?php

	class Menu extends Eloquent{

		protected $table = 'menu';

		// Atributos

		public function getLinkAttribute($value)
		{
			$link = ($value == '' || is_null($value)) ? 'web_get_index' : $value;

			return $link;
		}

	}
?>
