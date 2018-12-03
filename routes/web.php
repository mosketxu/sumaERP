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

Route::get('/set_language/{lang}', 'Controller@setLanguage')->name('set_language');

Auth::routes();

Route::get('/', 'SumaController@index')->name('home');
Route::get('suma/home/{has_tag?', 'SumaController@index')->name('homeServicios');
Route::get('suma/{has_tag?}', 'SumaController@suma')->name('suma');

Route::get('/empresas', 'EmpresaController@index');
Route::get('empresas/home', 'EmpresaController@show')->name('empresasHome');