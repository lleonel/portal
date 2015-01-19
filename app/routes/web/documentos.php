<?php

Route::get('documentos', ['as' => 'web_get_documentos_list', 'uses' => 'webDocumentosController@getList']);
Route::get('documentos/{id_documento}/download', ['as' => 'web_get_documentos_download', 'uses' => 'webDocumentosController@getDowonload']);

Route::group(['before' => 'csrf'], function() {
	Route::post('documentos/buscar', ['as' => 'web_post_documentos_search', 'uses' => 'webDocumentosController@postBuscar']);
});

?>