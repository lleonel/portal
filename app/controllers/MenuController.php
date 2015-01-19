<?php
class MenuController extends BaseController{


	public function getIndex(){

	//	$resp['novedades'] = Novedad::orderBy('fechaAlta', 'desc')
	//	->get();
	//	Return View::make('novedades.index')->with($resp);

		$resp['titulo'] =  "Lista de Menu Web";

		$resp['menus'] = Menu::all();

		return View::make('menu.index')->with($resp);
	}


	public function getNew() {
	
		$resp['title'] 	= 'Crear nuevo Menu';
		$resp['action']	= 'create';

		//$resp['areas'] = Area::lists('area', 'id');

		return View::make('menu.create')->with($resp);
		
	}

	public function postNew() {

		#Validacion
		$v = Validator::make(Input::all(), array(
			'menu' => 'required|max:255'
		));

			
			if ($v->fails()) {
				Input::flash();
				return Redirect::back()->withErrors($v);
			}


		$menu = new Menu;

		$menu->menu 	= Input::get('menu');
		$menu->link 	= Input::get('link');
		$menu->save();

		return Redirect::to('admin/menu')->with('success', 'Creado Correctamente.');		
		}


	public function getEdit($id = 0) {
	
		$id = Crypt::decrypt($id);

		$resp['areas'] = Menu::findOrFail($id);
		$resp['action']= 'edit';
		//$resp['areas'] = Area::lists('area', 'id');

		return View::make('menu.create')->with($resp);

	}

	public function postEdit($id = null){

		$id 		=  Crypt::decrypt($id);

		$menu 		=  Menu::find($id);
		//$file 		=  Input::file('file');

		$menu->menu 		= Input::get('menu');
		$menu->link 		= Input::get('link');

		$menu->save();		

		return Redirect::to('admin/menu')->with('success', 'Editado Correctamente.');

		//return Redirect::to('areas')->with('success', 'Editado Correctamente.');
	}

	public function getDel($id = null){

		$id = Crypt::decrypt($id);

		$menu = Menu::find($id);
		
		if($menu->delete()){
		
			//File::delete($this->destinationPath.$area->documento);
			return Redirect::to('admin/menu')->with('success', 'Eliminado Correctamente.');

		}else{
		
			return Redirect::back()->with("error","Error"); 

		}

	}



}
?>