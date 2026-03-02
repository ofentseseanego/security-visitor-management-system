<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::get('/visitors', 'VisitorController@index');
    Route::get('/visitors/{id}', 'VisitorController@show');
    Route::post('/visitors', 'VisitorController@store');
    Route::put('/visitors/{id}', 'VisitorController@update');
    Route::delete('/visitors/{id}', 'VisitorController@destroy');
});
