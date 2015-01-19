<?php

class ProfilesController extends BaseController
{
		
	public function getIndex()
	{
		$perfilId = 2;

		$resp['modulo']				=	Modulos::all();
		$resp['profilesmodulos']	=	ProfilesModulos::where('profiles_id','=', $perfilId)->get();
		
		return View::make('config.profiles')->with($resp);
	}
}

?>