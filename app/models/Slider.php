<?php 

class Slider extends Eloquent
{
	protected $table = 'slider';


	public function getFechaattribute($value)
	{
		$fecha = DateTime::createFromFormat('Y-m-d', $value);
		
		return	 $fecha->format('d-m-Y');
	}
}

?>