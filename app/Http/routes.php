<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'api/matric','middleware'=>'cors'], function () {
    //
    Route::get('datas','datasController@index');
    Route::get('datas/{level}/{department}','datasController@show');
    Route::get('datas/carry/{carry}/{department}','datasController@carry');
    Route::get('datas/{level}/{department}/{title}','datasController@find');
    Route::get('datas/carry/{carry}/{department}/{title}','datasController@fcarry');
    Route::post('datas','datasController@store');
    Route::get('matric','matricController@index');
    Route::get('matric/{password}', 'matricController@find');
    Route::post('/','matricController@store');

});
//Route::group(['middleware' => ['cors']], function () {
//    //
//    Route::get('datas','datasController@index');
//    Route::get('datas/{level}','datasController@show');
//    Route::post('datas','datasController@store');
//
//});

