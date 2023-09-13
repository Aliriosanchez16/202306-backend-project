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


//entre al servidor por medio de ese metodo get y que devuelva el texto que le ponemos
Route::get('/', function () {
    return view('welcome');
});

//gets siempre para las url y los inputs para crear alguna cosa
Route::get('productos/categoria/alirio', function () {
    return 'estoy en la página de producto';
});

//para que devuelva todos los productos
Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es $id";
});

//para crear producto
Route::get('productos/create', function () {
    return "formulario creacion productos";
});

Route::get('productos/{id}/{categoria}', function ($id, $categoria) {
    return "el nombre del producto es $id con la categoria $categoria";
});