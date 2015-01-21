<?php

class Documento extends Eloquent{

	protected $table = 'documentos';

	/*//Atributos
	public function getFileAttribute() {
		return $this->documento;
	}

	public function getFullNameAttribute() {
		return $this->apellido . ', ' . $this->nombre;
	}*/

	//Relaciones
	public function Area() 
	{
		return $this->belongsTo('Area', 'id_area');
	}

	public function getFechaAltaAttribute($value)
	{
	
		$fecha = DateTime::createFromFormat('Y-m-d', $value);
		
		return	 $fecha->format('d-m-Y');
		
	}

	public function setFechaAltaAttribute($value)
	{
	
		$fecha = date('Y-m-d', strtotime($value));

		$this->attributes['fecha_alta'] = $fecha;

	}


	/*
	public function getIdAreaAttribute ($value)
	{
		
		$area = Area::where('id','=',$value)->first();

		return $area->area;
	}
	*/

 	
}



