<?php
Route::group([
   'middleware' => 'auth',
    'namespace' => 'Frontend\Offer',
    'prefix' => 'offers/treatment'
], 
function() {
    Route::get('/index/{id}', ['uses' => 'TreatmentController@index', 'as' => 'treatment']);

    Route::get('/create', ['uses' => 'TreatmentController@create', 'as' => 'treatment.create']);

    Route::post('', ['uses' => 'TreatmentController@store', 'as' => 'treatment.store']);

    Route::get('/show', ['uses' => 'TreatmentController@show', 'as' => 'treatment.show']);

    Route::get('/edit/{id}', ['uses' => 'TreatmentController@edit', 'as' => 'treatment.edit']);

    Route::put('/update/{id}', ['uses' => 'TreatmentController@update', 'as' => 'treatment.update']);

    Route::get('/destroy/{id}', ['uses' => 'TreatmentController@destroy', 'as' => 'treatment.destroy']);
});