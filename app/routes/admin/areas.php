<?php

//areas
Route::get('areas', 			array('as' =>'admin_get_areas','uses'=>'AreasController@getIndex'));

Route::get('areas_nuevo',	 	array('as' =>'admin_new_areas','uses'=>'AreasController@getNew'));
Route::get('areas_editar/{id}', array('as' =>'admin_edit_areas','uses'=>'AreasController@getEdit'));
Route::get('areas_borrar/{id}', array('as' =>'admin_delete_areas','uses'=>'AreasController@getDel'));

Route::post('areas/{id}', 		array('as'=>'admin_post_edit_areas','uses'=>'AreasController@postEdit'));
Route::post('areas', 			array('as'=>'admin_post_new_areas','uses'=>'AreasController@postNew'));

?>