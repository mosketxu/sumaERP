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


Route::get('/servicios', 'SumaController@servicios')->name('suma.servicios');
Route::get('/equipo', 'SumaController@equipo')->name('suma.equipo');
Route::get('/clientes', 'SumaController@clientes')->name('suma.clientes');
Route::get('/contacto', 'SumaController@contacto')->name('suma.contacto');
Route::get('/politica', 'SumaController@politica')->name('suma.politica');

Route::group(['middleware' => ['auth'], 'prefix' => 'erp'], function () {
    Route::get('/', 'EmpresaController@index')->name('empresas.index');
    Route::get('/empresas/{slug}', 'EmpresaController@show')->name('empresas.show');
    Route::get('/empresas/{id}/edit', 'EmpresaController@edit')->name('empresas.edit');
    Route::get('/empresas/{id}/destroy', 'EmpresaController@destroy')->name('empresas.destroy');
});

// Route::group(['prefix' => 'erp'], function () {
// Route::get('erp', 'EmpresaController@index');
// Route::get('erp/home', 'EmpresaController@index')->name('erp.home');
// Route::get('erp/empresas', 'EmpresaController@show')->name('erp.empresas');
    // Route::get('/empresa/{empresa}', 'EmpresaController@show')->name('erp.empresa');
// });