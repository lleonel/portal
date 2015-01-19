<?php

class ProtocoloController extends BaseController
{
	protected $up = "" ;

	public function __construct()
	{
		$this->up 	= 	new upload();

	}

	public function getIndex(){

	//	$resp['novedades'] = Novedad::orderBy('fechaAlta', 'desc')
	//	->get();
	//	Return View::make('novedades.index')->with($resp);

		$resp['titulo'] =  "Lista de Protocolo Telefónico";

		$resp['protocolo'] = Protocolo::all();

		return View::make('protocolo.index')->with($resp);
	}


	public function getNew() {
	
		$resp['title'] 	= 'Crear nuevo Protocolo Telefónico';
		$resp['action']	= 'create';
		//$resp['areas']	= Area::all();

		$a	= array();

		$areas = Area::orderBy('area')->get();

		foreach($areas as $area)
		{
			$a["$area->id"] = $area->id . '. ' . $area->area;
		}
		
		$resp['areas'] = $a;

		return View::make('protocolo.abm')->with($resp);
		
	}

	public function postNew() {

		$input 		= Input::all();
		$foto 		= $input['foto'];

		if($foto)
		{
			$input['foto'] = $this->up->up($foto,'uploads/protocolo');

		}

		Protocolo::create($input);

		
		return Redirect::to('admin/protocolo')->with('success', 'Creado Correctamente.');		
		}


	public function getEdit($id = 0) {
	
		$id = Crypt::decrypt($id);

		$resp['model'] = Protocolo::findOrFail($id);
		$resp['areas'] = Area::all();
		$resp['action']= 'edit';
		//$resp['areas'] = Area::lists('area', 'id');

		return View::make('protocolo.edit')->with($resp);

	}

	public function postEdit($id = null){

		$id 		= Crypt::decrypt($id);
		$input 		= Input::all();
		$model 		= Protocolo::find($id);
		//$file 		=  Input::file('file');
		$foto 		= $input['foto'];

		if($foto)
		{
			$input['foto'] = $this->up->up($foto,'uploads/protocolo');

		}


		$model->fill($input);

		/*
		$model->menu 		= Input::get('menu');
		$model->link 		= Input::get('link');
		*/

		$model->save();		

		return Redirect::to('admin/protocolo')->with('success', 'Editado Correctamente.');

		//return Redirect::to('areas')->with('success', 'Editado Correctamente.');
	}

	public function getDel($id = null){

		$id = Crypt::decrypt($id);

		$menu = Menu::find($id);
		
		if($menu->delete()){
		
			//File::delete($this->destinationPath.$area->documento);
			return Redirect::to('admin/protocolo')->with('success', 'Eliminado Correctamente.');

		}else{
		
			return Redirect::back()->with("error","Error"); 

		}

	}


}
	
?>