<?php
\Illuminate\Support\Facades\Auth::loginUsingId(2);
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
//单个写路由 麻烦
//Route::get('/','SiteController@index');
//Route::get('/article','ArticlesController@index');
//Route::get('/article/create','ArticlesController@create');
//Route::get('/article/{id}','ArticlesController@show');
//Route::post('article/store','ArticlesController@store');
//Route::get('article/{id}/edit','ArticlesController@edit');
//用resource注册路由
Route::resource('article','ArticlesController');

Route::get('auth/login','Auth\LoginController@showLoginForm');
Route::post('auth/login','Auth\LoginController@login');

Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@register');

Route::get('auth/logout','Auth\LoginController@logout');


