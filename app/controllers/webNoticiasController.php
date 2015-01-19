<?php

class webNoticiasController extends BaseController {

	public function getList()
	{
		$resp['novedades'] = Novedad::all();
		return View::make('web/noticias')->with($resp);
	}

	public function getShow($slugNoticia, $idNoticia)
	{
		$resp['novedades'] = Novedad::find($idNoticia);
		
		return View::make('web/amplia_nota')->with($resp);
	}

}

?>