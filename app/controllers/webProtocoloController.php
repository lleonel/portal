<?php

class webProtocoloController extends BaseController {

	public function getList()
	{
		$resp['protocolo'] = Protocolo::all();

		return View::make('web/protocolo')->with($resp);
	}
}

?>