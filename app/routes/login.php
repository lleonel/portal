<?php

Route::group(['before' => 'guest'], function() {
Route::get ('login' , array('uses'=>'LoginController@getLogin'));

	Route::group(['before' => 'csrf'], function() {
		Route::post('login' , array('uses'=>'LoginController@postLogin'));
	});
});

Route::any ('logout', array('uses'=>'LoginController@logout'));

?>