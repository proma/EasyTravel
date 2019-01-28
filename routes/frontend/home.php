<?php
Route::group([
   // 'middleware' => 'auth',
    'namespace' => 'Frontend',
    // 'prefix' => null
], function() {
    Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
    Route::get('/info', ['uses' => 'HomeController@info', 'as' => 'info']);
});