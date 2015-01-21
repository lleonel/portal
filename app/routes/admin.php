<?php

//novedades
Route::get('novedades', array('as' => 'admin_get_novedades','uses'=>'NovedadesController@getIndex'));
Route::get('novedades_nuevo', array('as' => 'admin_new_novedades','uses'=>'NovedadesController@getNew'));
Route::get('novedades_editar/{id}', array('as' => 'admin_edit_novedades','uses'=>'NovedadesController@getEdit'));
Route::get('novedades_borrar/{id}', array('as' => 'admin_delete_novedades','uses'=>'NovedadesController@getDel'));

Route::post('novedades/{id}', array('as'=>'admin_post_edit_novedades','uses'=>'NovedadesController@postEdit'));
Route::post('novedades', array('as'=>'admin_post_new_novedades','uses'=>'NovedadesController@postNew'));

//documentos
Route::get('documentos', array('as' => 'admin_get_documentos','uses'=>'DocumentosController@getIndex'));
Route::get('documentos_nuevo', array('as' => 'admin_new_documentos','uses'=>'DocumentosController@getNew'));
Route::get('documentos_editar/{id}', array('as' => 'admin_edit_documentos','uses'=>'DocumentosController@getEdit'));
Route::get('documentos_borrar/{id}', array('as' => 'admin_delete_documentos','uses'=>'DocumentosController@getDel'));
Route::get('donwload/{id}', array('as'=>'download_documentos','uses'=>'DocumentosController@download'));

Route::post('documentos/{id}', array('as'=>'admin_post_edit_documentos','uses'=>'DocumentosController@postEdit'));
Route::post('documentos', array('as'=>'admin_post_new_documentos','uses'=>'DocumentosController@postNew'));



Route::get('areas', array('as' => 'admin_get_areas','uses'=>'AreasController@getIndex'));
Route::get('protocolo', array('as' => 'admin_get_protocolo','uses'=>'ProtocoloController@getIndex'));
Route::get('menu_web', array('as' => 'admin_get_menu_web','uses'=>'MenuController@getIndex'));
Route::get('banner_web', array('as' => 'admin_get_banner_web','uses'=>'BannerController@getIndex'));
Route::get('slider_web', array('as' => 'admin_get_slider_web','uses'=>'SliderController@getIndex'));



Route::controller('protocolo' ,'ProtocoloController');
Route::controller('profiles'  ,'ProfilesController');
Route::controller('areas'	  ,'AreasController');
Route::controller('documentos','DocumentosController');
Route::controller('menu'	  ,'MenuController');
Route::controller('novedades' ,'NovedadesController');
Route::controller(''		  ,'VistaBaseController');

?>