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
Route::post('/jobs/create', 'JobsController@store');


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

//Show all applications for specific job listing.
Route::get('/jobs/{id}/applications', 'ApplicationsController@index');

//View individual Application 
Route::get('/application/{id}', 'ApplicationsController@show');

