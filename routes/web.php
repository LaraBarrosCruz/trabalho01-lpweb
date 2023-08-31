<?php

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
    
    return view("paginas.index");
});


Route::get('/about', function () {
    return view("paginas.about");
});

Route::get('/contato', function () {
    return view("paginas.contato");
});

Route::get('/servicos', function () {
    return view("paginas.servicos");
});