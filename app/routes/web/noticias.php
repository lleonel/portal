<?php

Route::get('noticias', ['as' => 'web_get_noticias_list', 'uses' => 'webNoticiasController@getList']);
Route::get('noticias/{slug_titulo}/{id_noticia}/leer', ['as' => 'web_get_noticias_show', 'uses' => 'webNoticiasController@getShow']);


?>