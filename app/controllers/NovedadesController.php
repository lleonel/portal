<?php
class NovedadesController extends BaseController{

	public   $destinationPath = 'uploads/novedades/';


	public function getXls()
	{
			Excel::create('pelado', function($excel) {

				$data  = Novedad::all();

				$excel->sheet('hoja', function($sheet) use($data) {

					$sheet->fromModel($data);

				});

			})->download('xls');

	}

	public function getPdf()
	{
	
		$data = array('novedades' => Novedad::all() );

		$pdf = PDF::loadView('novedades.reporte', $data);

		return $pdf->stream();

 		
		$pdf = App::make('dompdf');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
	}



	public function postEdit($id=null){

		$id 	 =  Crypt::decrypt($id);
		$novedad =  Novedad::find($id);

		$file = Input::file('imagen');

		if($file)
		{

			$date 	  =  new DateTime();		
			$filename =  $date->getTimestamp().".".$file->getClientOriginalExtension();
			$upload_success = Input::file('imagen')->move($this->destinationPath , $filename);

				if( $upload_success ) 
				{
					File::delete($this->destinationPath.$novedad->imagen);
					$novedad->imagen = $filename ;

				} else {

					return Redirect::back('error', 400);

				}	
		}

		$novedad->titulo 		= Input::get('titulo');
		$novedad->fecha_alta	=  date('Y-m-d',strtotime(Input::get('fecha_alta')));
		$novedad->encabezado	= Input::get('encabezado');
		$novedad->cuerpo		= Input::get('cuerpo');
		
		$novedad->save();		

		return Redirect::to('admin/novedades')->with('success', 'Editado Correctamente.');

	}




	public function getIndex(){

		$resp['novedades'] = Novedad::orderBy('fecha_alta', 'desc')
		->paginate('12');

		Return View::make('novedades.index')->with($resp);
	}




	public function getNew() {
	
		$resp['title'] = 'Crear nueva Novedad';

		Return View::make('novedades.form')->with($resp);
		
	}




	public function postNew() {
		
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
		}*/

		$novedad = new Novedad;

		$file = Input::file('imagen');

		if($file){

			$date 	  =  new DateTime();
			$filename =  $date->getTimestamp().".".$file->getClientOriginalExtension();
	
			$upload_success = Input::file('imagen')->move($this->destinationPath, $filename);

				if( $upload_success ) {

					$novedad->imagen = $filename ;

				} else {

					return Redirect::back('error', 400);

				}	
		}
			
		$novedad->titulo 	 	= Input::get('titulo');
		$novedad->fecha_alta  	= date('Y-m-d',strtotime(Input::get('fecha_alta')));
		$novedad->encabezado 	= Input::get('encabezado');
		$novedad->cuerpo	 	= Input::get('cuerpo');	
		$novedad->save();
		
		//return Redirect::back()->with('success', 'Cargado Correctamente.');

		return Redirect::to('admin/novedades')->with('success', 'Agregado Correctamente.');
	
	}




	public function getEdit($id = null) {
		
		$id 		= Crypt::decrypt($id);
		$novedad 	= Novedad::find($id);
		
		$resp['novedad'] = $novedad;
		Return View::make('novedades.form')->with($resp);

	}


	public function getDel($id = null){

		$id = Crypt::decrypt($id);

		$novedad = Novedad::find($id);
		
		if($novedad->delete()){
		
			File::delete($this->destinationPath.$novedad->imagen);

			return Redirect::to('admin/novedades')->with('success', 'Eliminado Correctamente.');
			//return Redirect::back()->with("success","Elemento Eliminado"); 

		}else{
		
			return Redirect::back()->with("error","Error"); 
		}

	}


}
?>