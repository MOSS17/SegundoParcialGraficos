<?php

use Illuminate\Support\Facades\Route;
use App\Models\Codigo;
use Illuminate\Http\Request;

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
    return view('welcome');
});



Route::get('codigos', 'App\Http\Controllers\CodigosController@index')->name('codigos.index');

Route::get('agregar', 'App\Http\Controllers\CodigosController@agregar');

Route::post('crear', 'App\Http\Controllers\CodigosController@crear')->name('codigos.store');

Route::get('codigos/{id}/editar', 'App\Http\Controllers\CodigosController@editar')->name('codigos.edit');

Route::put('codigos/{codigo}/editar', 'App\Http\Controllers\CodigosController@update')->name('codigos.update');

Route::delete('codigos/{id}', 'App\Http\Controllers\CodigosController@destroy')->name('codigos.destroy');
