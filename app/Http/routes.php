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
//Route::group(['middleware' => 'auths'], function() {
    Route::get('/',          ['as' => '', 'uses' => 'PanelController@index']);
    Route::post('/endpoint', ['as' => '', 'uses' => 'EndPointController@capture']);
//});


Route::get('/auth/login',              ['as' => 'login', 'uses' => 'AuthController@index']);
Route::post('/auth/login/authenticate', ['as' => 'login.authenticate', 'uses' => 'AuthController@authenticate']);

Route::get('/projects',             ['as' => 'projects.index',  'uses' => 'ProjectController@index']);
Route::get('/projects/create',      ['as' => 'projects.create', 'uses' => 'ProjectController@create']);
Route::get('/projects/insert',      ['as' => 'projects.insert', 'uses' => 'ProjectController@insert']);
Route::get('/projects/show/{id}',   ['as' => 'projects.show',   'uses' => 'ProjectController@show']);
Route::get('/projects/edit/{id}',   ['as' => 'projects.edit',   'uses' => 'ProjectController@edit']);
Route::get('/projects/update',      ['as' => 'projects.update', 'uses' => 'ProjectController@update']);
Route::get('/projects/delete/{id}', ['as' => 'projects.delete', 'uses' => 'ProjectController@destroy']);