<?php

	class Area extends Eloquent
	{

		protected $table = 'areas';

		public function Documento()
		{
			return $this->hasMany('documento');
		}

	}
?>
