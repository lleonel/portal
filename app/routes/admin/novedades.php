<?php
//novedades
Route::get('novedades', array('as' => 'admin_get_novedades','uses'=>'NovedadesController@getIndex'));
Route::get('novedades_nuevo', array('as' => 'admin_new_novedades','uses'=>'NovedadesController@getNew'));
Route::get('novedades_editar/{id}', array('as' => 'admin_edit_novedades','uses'=>'NovedadesController@getEdit'));
Route::get('novedades_borrar/{id}', array('as' => 'admin_delete_novedades','uses'=>'NovedadesController@getDel'));

Route::post('novedades/{id}', array('as'=>'admin_post_edit_novedades','uses'=>'NovedadesController@postEdit'));
Route::post('novedades', array('as'=>'admin_post_new_novedades','uses'=>'NovedadesController@postNew'));

?>