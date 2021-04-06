<?php

Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Customer',
    'prefix' => 'admin/registeredoffer'

], 
function() {

    Route::get('',  'RegisteredController@index')->name('admin.registered.index');

    Route::get('/create', ['uses' => 'RegisteredController@create', 'as' => 'admin.registered.create']);

    Route::post('', ['uses' => 'RegisteredController@store', 'as' => 'admin.registered.store']);

    Route::get('/show/{id}', ['uses' => 'RegisteredController@show', 'as' => 'admin.registered.show']);

    Route::get('/edit/{id}', ['uses' => 'RegisteredController@edit', 'as' => 'admin.registered.edit']);

    Route::post('/update/{id}', ['uses' => 'RegisteredController@update', 'as' => 'admin.registered.update']);

    Route::get('/destroy/{id}', ['uses' => 'RegisteredController@destroy', 'as' => 'admin.registered.destroy']);
});