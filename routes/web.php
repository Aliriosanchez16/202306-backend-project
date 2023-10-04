<?php

use App\Http\Controllers\ProductController;
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



//Redireccionamos con el controller de listproducts 
Route::get('productos', [ProductController::class,'listProducts'] );
Route::get('detalle', [ProductController::class,'detail'] );

/*
//gets siempre para las url y los inputs para crear alguna cosa
Route::get('productos/categoria/alirio', function () {
    return 'estoy en la página de producto';
});

//para crear producto
Route::get('productos/create', function () {
    return "formulario creacion productos";
});

Route::get('productos/{id}/{categoria}', function ($id, $categoria) {
    return "el nombre del producto es $id con la categoria $categoria";
});
*/