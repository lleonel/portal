<?php
class AreasController extends BaseController{

	public $idModulo = 2;


	public function getIndex(){

		 if(!$this->validarMetodo('listar'))
		 {
		 	return Redirect::to('/admin')->with('warning','Acceso Denegado');
		 }

			$resp['titulo'] =  "Lista de Areas";
			$resp['areas'] 	= 	Area::paginate(5);

			return View::make('areas.index')->with($resp);
	}


	public function getNew() {

		 if(!$this->validarMetodo('crear'))
		 {
		 	return Redirect::to('/admin')->with('warning','Acceso Denegado');
		 }

		$resp['title'] 	= 'Crear nueva Area';
		$resp['action']	= 'create';

			return View::make('areas.create')->with($resp);
		
	}

	public function postNew() {

		#Validacion
		$v = Validator::make(Input::all(), array(
			'area' => 'required|max:255'
		));

			if ($v->fails()) {
				Input::flash();
				return Redirect::back()->withErrors($v);
			}


		$area = new Area;
		$area->area 	= Input::get('area');
		$area->save();

				return Redirect::to('admin/areas')->with('success', 'Creado Correctamente.');		

		}


	public function getEdit($id = 0) {

		 if(!$this->validarMetodo('editar'))
		 {
		  		return Redirect::to('/admin')->with('warning','Acceso Denegado');
		 }
		
		$id = Crypt::decrypt($id);
		$resp['areas'] = Area::findOrFail($id);
		$resp['action']= 'edit';

				return View::make('areas.create')->with($resp);

	}

	public function postEdit($id=null){

		$id 		=  Crypt::decrypt($id);
		$area 		=  Area::find($id);
		//$file 		=  Input::file('file');

		$area->area 		= Input::get('area');
		$area->save();		

				return Redirect::to('admin/areas')->with('success', 'Editado Correctamente.');

		//return Redirect::to('areas')->with('success', 'Editado Correctamente.');
	}

	public function getDel($id = null){

		 if(!$this->validarMetodo('borrar'))
		 {
		 		return Redirect::to('/admin')->with('warning','Acceso Denegado');
		 }

		$id = Crypt::decrypt($id);

		$area = Area::find($id);
		
		if($area->delete()){
		
			//File::delete($this->destinationPath.$area->documento);
		
				return Redirect::to('admin/areas')->with('success', 'Eliminado Correctamente.');

		}else{
		
				return Redirect::back()->with("error","Error"); 

		}

	}


	public function validarMetodo($metodo)
	{

		if(Auth::User()->profile($this->idModulo)->$metodo == 0 )
		{
				return false;
		}
				return true;
	}		


}
?>