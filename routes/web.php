<?php

use App\Contracts\SomeInterface;
use App\Http\Middleware\CheckQueryParam;
use App\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/library', 'NazivModelaController@index')->name('library.index');
Route::get('/library/create', 'NazivModelaController@create')->name('library.create');
Route::post('/library', 'NazivModelaController@store')->name('library.store');
Route::get('/library/{id}', 'NazivModelaController@show')->name('library.show');
Route::get('/library/{id}/edit', 'NazivModelaController@edit')->name('library.edit');
Route::put('/library/{id}', 'NazivModelaController@update')->name('library.update');
Route::delete('/library/{id}', 'NazivModelaController@destroy')->name('library.destroy');
