<?php

class WsDocumentosController extends BaseController
{

	public 	$destinationPath = '/storage/uploads/documentos/';

	public function getDelete($id_documento = null)
	{
		
		//$id = Crypt::decrypt($id_documento);

		$documento = Documento::find($id_documento);

//		return Response::json($documento);

		//$folder	=	explode(app_path().$this->destinationPath.$documento->documento);
		//return $folder[0]."/".$folder[1];
		
		if($documento->delete()){
		
			File::delete(app_path().$this->destinationPath.$documento->documento);

			return Response::json(true);
			//return Redirect::to('admin/documentos')->with('success', 'Eliminado Correctamente.');

		}else{


			return Response::json(false);
		
			//return Redirect::back()->with("error","Error"); 

		}
	}
}

?>