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

Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',                  ['as'=>'clientes',               'uses'=>'ClienteController@index']);
    Route::get('create',            ['as'=>'clientes.create',        'uses'=>'ClienteController@create']);
    Route::get('{id}/destroy',      ['as'=>'clientes.destroy',       'uses'=>'ClienteController@destroy']);
    Route::get('{id}/edit',         ['as'=>'clientes.edit',          'uses'=>'ClienteController@edit']);
    Route::put('{id}/update',       ['as'=>'clientes.update',        'uses'=>'ClienteController@update']);
    Route::post('store',            ['as'=>'clientes.store',         'uses'=>'ClienteController@store']);
});

Route::group(['prefix'=>'estados', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',                  ['as'=>'estados',               'uses'=>'EstadosController@index']);
    Route::get('create',            ['as'=>'estados.create',        'uses'=>'EstadosController@create']);
    Route::get('{id}/destroy',      ['as'=>'estados.destroy',       'uses'=>'EstadosController@destroy']);
    Route::get('{id}/edit',         ['as'=>'estados.edit',          'uses'=>'EstadosController@edit']);
    Route::put('{id}/update',       ['as'=>'estados.update',        'uses'=>'EstadosController@update']);
    Route::post('store',            ['as'=>'estados.store',         'uses'=>'EstadosController@store']);
});

Route::group(['prefix'=>'cidades', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',                  ['as'=>'cidades',               'uses'=>'CidadeController@index']);
    Route::get('create',            ['as'=>'cidades.create',        'uses'=>'CidadeController@create']);
    Route::get('{id}/destroy',      ['as'=>'cidades.destroy',       'uses'=>'CidadeController@destroy']);
    Route::get('{id}/edit',         ['as'=>'cidades.edit',          'uses'=>'CidadeController@edit']);
    Route::put('{id}/update',       ['as'=>'cidades.update',        'uses'=>'CidadeController@update']);
    Route::post('store',            ['as'=>'cidades.store',         'uses'=>'CidadeController@store']);
});
