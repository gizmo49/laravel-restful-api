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

Route::get('/', 'ProjectsController@ProjectView');

Route::post('/projects','ProjectsController@PostProject');

Route::get('articles', 'ArticlesController@getArticles');

Route::get('articles/{id}', 'ArticlesController@findArticles');