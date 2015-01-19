<?php

class BannerController extends BaseController
{

	public   $destinationPath = 'uploads/banner/';


	public function postEdit($id=null){

		$id 	=  Crypt::decrypt($id);
		$data 	=  Banner::find($id);
		$file 	=  Input::file('file');

		if($file)
		{

			$date 	  		=  new DateTime();		
			$filename 		=  $date->getTimestamp().".".$file->getClientOriginalExtension();
			$upload_success =  Input::file('file')->move($this->destinationPath , $filename);

				if( $upload_success ) 
				{
					File::delete($this->destinationPath.$data->imagen);
					$data->imagen = $filename ;

				} else {

					return Redirect::back('error', 400);

				}	
		}

	//	$data->descripcion 	= Input::get('descripcion');
	//	$data->fecha 		=  date('Y-m-d',strtotime(Input::get('fecha')));		
		$data->save();		

		return Redirect::to('admin/banner')->with('success', 'Editado Correctamente.');

	}




	public function getIndex(){

		$resp['data'] = Banner::orderBy('created_at', 'desc')
		->get();

		return View::make('banner.index')->with($resp);
	}




	public function getNew() {
	
		$resp['title'] = 'Crear nuevo banner';

		return View::make('banner.abm')->with($resp);
		
	}




	public function postNew() {
		
		/*$validation = Validator::make(Input::all(), array(
				'titulo' => 'required|between:4,150',
				'fecha'	 => 'required|date|date_format:d-m-Y',
				'file'	 => 'required|image|size:50',
			),
			array(
				'titulo.required' => 'Es obligatorio',
				'titulo.between' => 'Tienes que ingresar un valor entre :min y :max',
				'fecha.required' => 'no',
				'fecha.date_format' => 'este'
			)
		);
*/
	
		$data = new Banner;

		$file = Input::file('imagen');

	//	$file = Image::resize($file, '1093x383');

		if($file){

			$date 	  =  new DateTime();
			$filename =  $date->getTimestamp().".".$file->getClientOriginalExtension();
	
			$upload_success = Input::file('imagen')->move($this->destinationPath, $filename);

				if( $upload_success ) {

					$data->imagen = $filename ;

				} else {

					return Redirect::back('error', 400);

				}	
		}
			
		$data->link 	 = Input::get('link');
		//$data->fecha  = date('Y-m-d',strtotime(Input::get('fecha')));
		$data->save();
		
		//return Redirect::back()->with('success', 'Cargado Correctamente.');

		return Redirect::to('admin/banner')->with('success', 'Agregado Correctamente.');
	
	}




	public function getEdit($id = null) {
		
		$id 	= Crypt::decrypt($id);
		$data 	= Banner::find($id);

		$resp['data'] = $data;

		Return View::make('banner.edit')->with($resp);

	}


	public function getDel($id = null){

		$id = Crypt::decrypt($id);

		$data = Banner::find($id);
		
		if($data->delete()){
		
			File::delete($this->destinationPath.$data->imagen);

			return Redirect::to('admin/banner')->with('success', 'Eliminado Correctamente.');
			//return Redirect::back()->with("success","Elemento Eliminado"); 

		}else{
		
			return Redirect::back()->with("error","Error"); 
		}

	}


}

?>