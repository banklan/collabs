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

// Route::get('/{any}', 'WelcomeController@index')->where('any', '.*');

Route::get('/', 'PageController@index')->name('home');
Route::get('/create_project', 'PageController@index')->name('create');
Route::get('/create_project/fundraising', 'PageController@index')->name('create_fund');
Route::get('/create_project/fundraising2', 'PageController@index');
Route::get('/create_project/fundraising3', 'PageController@index');
Route::get('/create_project/fundraising4', 'PageController@index');
Route::get('/fundraising_project/{id}/{slug}', 'PageController@index')->name('show_project');
Route::get('/create_project/volunterr', 'WelcomeController@index')->name('create_volunteer');
Route::get('/create_project/patron]', 'WelcomeController@index')->name('create_patron');
Route::get('/images/proj/{img}', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/getlatestprojects', 'ProjectController@getLatest');
Route::get('/getpopularprojects', 'ProjectController@getPopular');
Route::get('/gethappyendings', 'ProjectController@getHappyEndings');

Route::get('/get_proj_cats', 'ProjectController@getCategs');
// Route::get('/get_categs', 'ProjectController@getCats');

Route::get('/getfundraisingproject/{id}', 'ProjectController@getFundRaisingProject');

Route::post('/create_fund_project', 'ProjectController@createFundRaising');
