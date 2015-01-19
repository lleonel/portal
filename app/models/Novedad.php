<?php

class Novedad extends Eloquent
{

	protected $table = 'novedades';

	// Atributos

	public function getFechaAltaAttribute($value)
	{
	
		$fecha = DateTime::createFromFormat('Y-m-d', $value);
		
		return	 $fecha->format('d-m-Y');
	}

	public function getSlugAttribute()
	{
		return Str::slug($this->titulo);
	}
}

?>
