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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('meuperfil', 'UsuarioController@index')->name('meuperfil');
Route::get('/minhafrequencia/{id}', 'UsuarioController@minhaFrequencia')->name('frequencia');
Route::get('/minhaturma/{turma}', 'UsuarioController@minhaTurma')->name('minhaturma');
Route::get('/perfil/{matricula}', 'UsuarioController@perfil')->name('perfil');

Route::get('admin', 'AdministracaoController@index')->name('admin.administracao');
Route::get('admin/frequencia', 'AdministracaoController@frequencia')->name('admin.frequencia');
Route::post('admin/frequenciaa', 'AdministracaoController@envioFrequencia')->name('admin.frequenciaa');