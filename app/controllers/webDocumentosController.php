<?php

class webDocumentosController extends BaseController {

	public function getList()
	{
		$resp['documentos'] = Documento::orderBy('visita','DESC')->get();

		return View::make('web/archivos')->with($resp);	 
	}

	public function postBuscar()
	{
		$resp['documentos'] = Documento::where('titulo','like',Input::get('buscar').'%')->get(); 

		return Redirect::to('documentos')->with($resp);
	}

	public function getDowonload($idDocumento)
	{
		$documento 	= Documento::find($idDocumento);
		$ruta 		= app_path('storage/uploads/documentos/' . $documento->documento);

		if (!File::exists($ruta))
			return App::abort(404);

		$extension = File::extension($ruta);

		$documento->visita++;
		$documento->save();

		return Response::download($ruta, 'download.' . $extension);
		
	}
}

?>