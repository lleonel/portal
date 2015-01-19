<?php

	class Protocolo extends Eloquent
	{
		protected $table 	= 'protocolo_telefonico';
		protected $guarded 	= array('');

		public function getAreasIdAttribute($value)
		{
			return Area::find($value);
		}
	}
?>