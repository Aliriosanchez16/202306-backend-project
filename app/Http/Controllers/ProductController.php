<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Vamos a crear metodos

    public function listProducts(){
        //products.products (products, es el nombre de la carpeta que creamos en view y (products, es el archivo .php))
        return view("products.products");
    }

    //creamos otro metodo
    public function detail(){
        return view('products.detail');
    }

}
