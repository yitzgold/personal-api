<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return view('docs');
});

Route::get('/institutions', 'InstitutionsController@all');

Route::get('/institutions/{id}', 'InstitutionsController@oneById');

Route::get('/projects', 'ProjectsController@all');

Route::get('/projects/{id}', 'ProjectsController@oneById');

Route::get('/skills', 'SkillsController@all');


