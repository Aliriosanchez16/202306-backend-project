@extends('layout.main')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/fondo1_receta.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/fondo2_receta.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/fondo1_receta.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <h1 class="text-center m-5">Productos </h1>

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/pollo_relleno.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pollo Relleno</h5>
                        <p class="card-text">Deliciosa receta para deleitar el paladar</p>
                        <a href="#" class="btn btn-primary my-background">Ver Receta</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/producto1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre del producto</h5>
                                    <p class="card-text">$ 1.000.000</p>
                                    <a href="#" class="btn btn-primary my-background">Añadir Carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="img/producto1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Nombre del producto</h5>
                                    <p class="card-text">$ 1.000.000</p>
                                    <a href="#" class="btn btn-primary my-background">Añadir Carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
