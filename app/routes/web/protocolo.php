<?php

Route::get('protocolo', ['as' => 'web_get_protocolo_list', 'uses' => 'webProtocoloController@getList']);

?>