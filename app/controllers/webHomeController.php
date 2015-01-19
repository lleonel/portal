<?php

class webHomeController extends BaseController {

	public function getIndex()
	{
		$resp['banner']		= 	Banner::all();	
		$resp['novedades']	=	Novedad::all();
		return View::make('web/index')->with($resp); 
	}

}