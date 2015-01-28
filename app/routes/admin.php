<?php





Route::get('protocolo', 	array('as' => 'admin_get_protocolo',	'uses'=>'ProtocoloController@getIndex'));
Route::get('menu_web', 		array('as' => 'admin_get_menu_web',		'uses'=>'MenuController@getIndex'));
Route::get('banner_web', 	array('as' => 'admin_get_banner_web',	'uses'=>'BannerController@getIndex'));
Route::get('slider_web', 	array('as' => 'admin_get_slider_web',	'uses'=>'SliderController@getIndex'));



Route::controller('protocolo' ,'ProtocoloController');
Route::controller('profiles'  ,'ProfilesController');
Route::controller('areas'	  ,'AreasController');
Route::controller('documentos','DocumentosController');
Route::controller('menu'	  ,'MenuController');
Route::controller('novedades' ,'NovedadesController');
Route::controller(''		  ,'VistaBaseController');



?>