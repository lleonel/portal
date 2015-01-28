<?php

//documentos
Route::get('documentos', array('as' => 'admin_get_documentos','uses'=>'DocumentosController@getIndex'));
Route::get('documentos_nuevo', array('as' => 'admin_new_documentos','uses'=>'DocumentosController@getNew'));
Route::get('documentos_editar/{id}', array('as' => 'admin_edit_documentos','uses'=>'DocumentosController@getEdit'));
Route::get('documentos_borrar/{id}', array('as' => 'admin_delete_documentos','uses'=>'DocumentosController@getDel'));
Route::get('donwload/{id}', array('as'=>'download_documentos','uses'=>'DocumentosController@download'));

Route::post('documentos/{id}', array('as'=>'admin_post_edit_documentos','uses'=>'DocumentosController@postEdit'));
Route::post('documentos', array('as'=>'admin_post_new_documentos','uses'=>'DocumentosController@postNew'));

Route::group(array('prefix'=>'ws'),function()
{
	Route::controller('documentos','WsDocumentosController');
});

?>