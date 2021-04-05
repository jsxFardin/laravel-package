<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Fardin\Contact\Http\Controllers'], function () {

    Route::get('/contact', 'ContactController@index');
    Route::post('/contact', 'ContactController@store');
});
