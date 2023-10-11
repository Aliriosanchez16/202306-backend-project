@extends('layout.main')

@section('content')
    <h1 class="text-center m-5">Detalle del Producto </h1>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="img/producto1.png" class="img-fluid">
            </div>
            <div class="col-md-4">
                <h1>nombre producto</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio, molestiae ullam reiciendis hic consequatur in ut, ratione veniam laboriosam omnis neque alias? At error laudantium alias ab consequuntur, exercitationem possimus.</p>
                <h3>$1.000.000</h3>
                <button type="button" class="btn my-background">Añadir a Carrito</button>
            </div>
        </div>
    </div>
@endsection
