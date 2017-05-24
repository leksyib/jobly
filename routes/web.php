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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*
|--------------------------------------------------------------------------
| Job Listings Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Job Routes
Route::get('/', 'JobsController@index');
Route::get('/jobs/create', 'JobsController@create');
Route::get('/jobs/{id}', 'JobsController@show');
Route::get('/jobs/{id}/edit', 'JobsController@edit');
Route::post('/jobs/{id}/edit', 'JobsController@update');
Route::post('/jobs/create', 'JobsController@store');
Route::get('/jobs/{id}/delete', 'JobsController@delete');
Route::post('/jobs/{id}/delete', 'JobsController@destroy');


/*
|--------------------------------------------------------------------------
| Job Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Create new application 
Route::post('/jobs/{id}', 'ApplicationsController@store');

//Show all applications for specific job listing. This needs to be protected by middleware. 
Route::get('/jobs/{id}/applications', 'ApplicationsController@index');

//View individual Application. This also needs to be protected by middleware. 
Route::get('/application/{id}', 'ApplicationsController@show');

