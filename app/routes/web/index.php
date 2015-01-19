<?php

Route::get('', ['as' => 'web_get_index', 'uses' => 'webHomeController@getIndex']);

?>