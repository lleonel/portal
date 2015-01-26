<?php
//test

# Login
require (__DIR__ . '/routes/login.php');

Route::group(array('before' => 'auth'), function()
{
	
	# Index
	require (__DIR__ . '/routes/web/index.php');

	# Documentos
	require (__DIR__ . '/routes/web/documentos.php');

	# Noticias
    require (__DIR__ . '/routes/web/noticias.php');

    # Protocolo
    require (__DIR__ . '/routes/web/protocolo.php');

	# PREFIX: Admin
	Route::group(array('prefix' => 'admin'), function()
	{
		require (__DIR__ . '/routes/admin.php');
	});

});



/////// PRUEBAS ///////	


/*Route::get('qr/{id_protoc}', function($id){

	$protocolo  = Protocolo::find($id);

	//$data  = $protocolo->nombre.' / '.$protocolo->apellido .' / '.$protocolo->telefono;

	$data  = "MECARD:N:".$protocolo->apellido.",".$protocolo->nombre.";
	NICKNAME:".$protocolo->cargo." de ".$protocolo->areas_id->area.";
	TEL:".$protocolo->celular.";
	TEL-AV:".$protocolo->telefono.";
	EMAIL:".$protocolo->email.";
	ADR:".$protocolo->domicilio.";;"
	;

   return DNS2D::getBarcodeHtml($data, "QRCODE", 4, 4, "black");

});*/


/*
Route::group(array('before' => 'auth|rule:1|'), function()
{
	//ruta para admin
	Route::group(array('prefix' => 'admin'), function()
	{
		Route::controller('banner'    ,'BannerController');
		Route::controller('slider'    ,'SliderController');
		Route::controller('profiles'  ,'ProfilesController');
		Route::controller('areas'	  ,'AreasController');
		Route::controller('documentos','DocumentosController');
		Route::controller('menu'	  ,'MenuController');
		Route::controller('novedades' ,'NovedadesController');
		Route::controller('protocolo' ,'ProtocoloController');
		Route::controller(''		  ,'VistaBaseController');
	});
});

*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/

/*
Route::get('json',function()
		{
			$a = json_decode('{"usuario":"Manuel"}');

			return $a->usuario;
		}
	);
*/

/*Route::get('login', function()
{
	//return Hash::make('123456');
	if (Auth::check()) {
	
		$modulo = Auth::user()->profile->modulos->count();

		return dd($modulo);

	} else {

		return View::make('login');
	}
});

Route::post('login', function()
{

	$user 		= Input::get('correo');
	$password 	= Input::get('password');
	
	if (Auth::attempt(['email' => $user,'password' => $password])) {	
		return "ok";
	}


	//return $user . $password;
});*/


/*
Route::post('prueba' ,function(){

$data[] = null;

	
	if(Request::ajax())		  
	  {
	  	//$data = array('username'=>'yo');

		//$a = Novedad::all()->first();

		$data = Novedad::where('titulo','like', '%'.Input::get('username').'%')->get()->toJson();
		
		//$data 	= array('username'=>Input::get('username'));

		//$data = 	Novedad::find(1)->toJson();

	  }


	//return Response::json($data);
	  return Response::json($data);


});


Route::get('prueba', function(){

	
	return View::make('prueba');

});
*/

/*
Route::get('tabla',function(){

	return grilla::armaTabla('Area');
});
*/