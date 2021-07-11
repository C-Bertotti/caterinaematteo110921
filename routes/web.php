<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/il-matrimonio', function () {
    return view('matrimonio');
})->name('matrimonio');

Route::get('/la-lista-nozze', function () {
    return view('lista');
})->name('lista');

Route::get('/il-viaggio', function () {
    return view('viaggio');
})->name('viaggio');

