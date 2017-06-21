<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'areas', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',                  ['as'=>'areas',               'uses'=>'AreaController@index']);
    Route::get('create',            ['as'=>'areas.create',        'uses'=>'AreaController@create']);
    Route::get('{id}/destroy',      ['as'=>'areas.destroy',       'uses'=>'AreaController@destroy']);
    Route::get('{id}/edit',         ['as'=>'areas.edit',          'uses'=>'AreaController@edit']);
    Route::put('{id}/update',       ['as'=>'areas.update',        'uses'=>'AreaController@update']);
    Route::post('store',            ['as'=>'areas.store',         'uses'=>'AreaController@store']);
});
