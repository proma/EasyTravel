<?php



Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Admin\Hospital',
    'prefix' => 'admin/hospital'

], function() {
    
    // Route::get('', ['uses' => 'DashboardController@index', 'as' => 'admin.dashboard.index']);

    Route::get('/', ['uses' => 'HospitalController@index', 'as' => 'admin.hospitals.index']);
    Route::get('/create', ['uses' => 'HospitalController@create', 'as' => 'admin.hospitals.create']);

    Route::post('', ['uses' => 'HospitalController@store', 'as' => 'admin.hospitals.store']);

    Route::get('/show/{id}', ['uses' => 'HospitalController@show', 'as' => 'admin.hospitals.show']);

    Route::get('/edit/{id}', ['uses' => 'HospitalController@edit', 'as' => 'admin.hospitals.edit']);

    Route::put('/update/{id}', ['uses' => 'HospitalController@update', 'as' => 'admin.hospitals.update']);

    Route::get('/destroy/{id}', ['uses' => 'HospitalController@destroy', 'as' => 'admin.hospitals.destroy']);
});