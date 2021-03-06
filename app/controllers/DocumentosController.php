<?php

class DocumentosController extends BaseController{

	public 	$destinationPath = '/storage/uploads/documentos/';

	
	//  authenticar usuarios antes de entrar al control 

	/*public function __construct() {

		$this->beforeFilter(function() {

			#Usuario Logueado
			if (!Auth::check()) {
				return App::abort(403, 'No tiene acceso');
			}


		});
	}*/

	

	public function postEdit($id=null){

		$id 		=  Crypt::decrypt($id);	
		$documento 	=  Documento::find($id);
		$file 		=  Input::file('documento');

		if($file)
		{
			$nombre		=  $file->getClientOriginalName();
			$date 	 	=  new DateTime();

			$filename	=  $date->getTimestamp().".".$file->getClientOriginalExtension();
			
			$upload_success =  Input::file('documento')->move(app_path().$this->destinationPath, $filename);

				if( $upload_success ) 
				{
					File::delete(app_path().$this->destinationPath.$documento->documento);
					
					$documento->documento 	=  $filename ;

				} else {

					return Redirect::back('error', 400);

				}	
		}

		$documento->titulo 		= Input::get('titulo');
		$documento->descripcion = Input::get('descripcion');
		$documento->fecha_alta	= date('Y-m-d',strtotime(Input::get('fecha_alta')));
		$documento->id_area		= Input::get('id_area');	
		$documento->save();		

		return Redirect::to('admin/documentos')->with('success', 'Modificado Correctamente.');		
	
	}


	public function getIndex()
	{

		$resp['titulo'] =  "Lista de Documentos";

		$resp['documentos'] = Documento::with('area')
		->paginate(10);

		return View::make('documentos.index')->with($resp);
	}

	public function getNew() {
	
		$resp['title'] = 'Crear nueva Documento';

		$resp['areas'] = Area::lists('area', 'id');

		return View::make('documentos.form')->with($resp);
		
	}


	public function postNew() {

		#Validacion
		$v = Validator::make(Input::all(), array(
			'fecha_alta' => 'required|date_format:d-m-Y',
			'documento' => 	'required|mimes:rar,zip,pdf,doc,docx|max:2048',
			'titulo' => 	'required|max:255',
			'link' => 		'url|max:255',
			'id_area' => 	'required|integer|exists:areas,id'
		));


		if ($v->fails()) 
		{
			Input::flash();
			return Redirect::back()->withErrors($v);
		}

		$documento  =  new Documento;
		$file 		=  Input::file('documento');

		if($file){

			$date 	 		 =  new DateTime();
			$filename		 =  $date->getTimestamp().".".$file->getClientOriginalExtension();
			$upload_success  =  Input::file('documento')->move(app_path().$this->destinationPath, $filename);

			if( $upload_success ) {

				$documento->documento = $filename ;

			} else {

				return Redirect::back('error', 400);

			}	

		}

		$documento->titulo  	= Input::get('titulo');
		$documento->link 		= Input::get('link');
		$documento->descripcion = Input::get('descripcion');
		$documento->id_area	 	= Input::get('id_area');	
		$documento->fecha_alta	= Input::get('fecha_alta');

		$documento->save();

		return Redirect::to('admin/documentos')->with('success', 'Creado Correctamente.');

		
	}
		/*$validation = Validator::make(Input::all(), array(
				'titulo' => 'required|between:4,255',
				'fecha'	 => 'required|date|date_format:d-m-Y',
				'file' => 'required|image|size:50',
			),
			array(
				'titulo.required' => 'Es obligatorio',
				'titulo.between' => 'Tienes que ingresar un valor entre :min y :max',
				'fecha.required' => 'no',
				'fecha.date_format' => 'este'
			)
		);

		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation);
		}*//*

		$novedad = new Novedad;

		$file = Input::file('file');

		if($file){


			$date 	  =  new DateTime();
			$filename =  $date->getTimestamp().".".$file->getClientOriginalExtension();
	
			$upload_success = Input::file('file')->move($this->destinationPath, $filename);

				if( $upload_success ) {

					$novedad->imagen = $filename ;

				} else {

					return Redirect::back('error', 400);

				}	
		}
			
		$novedad->titulo 	 = Input::get('titulo');
		$novedad->fechaAlta  = date('Y-m-d',strtotime(Input::get('fecha')));
		$novedad->encabezado = Input::get('encabezado');
		$novedad->cuerpo	 = Input::get('cuerpo');	
		$novedad->save();
		
		return Redirect::back()->with('success', 'Cargado Correctamente.');
	
	}


*/

	public function getEdit($id = 0) {
		
		$id = Crypt::decrypt($id);

		$resp['documento']	= Documento::findOrFail($id);
		$resp['areas'] 		= Area::lists('area', 'id');

		return View::make('documentos.form')->with($resp);

	}


	public function getDel($id = null){

		$id = Crypt::decrypt($id);

		$documento = Documento::find($id);

		//$folder	=	explode(app_path().$this->destinationPath.$documento->documento);
		//return $folder[0]."/".$folder[1];
		
		if($documento->delete()){
		
			File::delete(app_path().$this->destinationPath.$documento->documento);

			return Redirect::to('admin/documentos')->with('success', 'Eliminado Correctamente.');
			
		}else{
		
			return Redirect::back()->with("error","Error"); 

		}

	}

	public function Download($idDocumento = null)
	{
		$documento 	= Documento::find($idDocumento);
		$ruta 		= app_path($this->destinationPath.$documento->documento);

		if (!File::exists($ruta))
			return App::abort(404);

		$extension = File::extension($ruta);

		return Response::download($ruta, $documento->titulo .".". $extension);		
	}	


}

?>