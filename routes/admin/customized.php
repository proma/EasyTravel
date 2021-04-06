<?php

Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Customer',
    'prefix' => 'admin/customizedoffer'

], 
function() {

    Route::get('',  'CustomizedController@index')->name('admin.customized.index');

    Route::get('/create', ['uses' => 'CustomizedController@create', 'as' => 'admin.customized.create']);

    Route::post('', ['uses' => 'CustomizedController@store', 'as' => 'admin.customized.store']);

    Route::get('/show/{id}', ['uses' => 'CustomizedController@show', 'as' => 'admin.customized.show', 'as' => 'customizedoffer.show']);

    Route::get('/treatmentshow/{id}', ['uses' => 'CustomizedController@treatmentshow', 'as' => 'admin.customized.treatmentshow', 'as' => 'customizedoffer.treatmentshow']);

    Route::get('/edit/{id}', ['uses' => 'CustomizedController@edit', 'as' => 'admin.customized.edit']);

    Route::post('/update/{id}', ['uses' => 'CustomizedController@update', 'as' => 'admin.customized.update']);

    Route::get('/destroy/{id}', ['uses' => 'CustomizedController@destroy', 'as' => 'admin.customized.destroy']);
});