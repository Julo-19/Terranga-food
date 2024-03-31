@extends('components.navbar')

@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('Images/images1 1.png') }}" alt="" srcset="" class="d-block"
                    style="width: 100%; height:700px">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 190px">
                    <h1 class="text-uppercase" style="font-size: 84px">Faite votre <span class="fw-b"
                            style="color: #E7272D">commande</span></h2>
                        <a href="#" class="btn text-white py-3 mt-3"
                            style="background-color: #E7272D; margin-left:18px; width:20%">EN SAVOIR PLUS</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Images/images1 1.png') }}" alt="" srcset="" class="d-block w-100"
                    style="width: 100%; height:700px">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 190px">
                    <h1 class="text-uppercase" style="font-size: 84px">Faite votre <span
                            style="color: #E7272D">commande</span></h2>
                        <a href="#" class="btn text-white py-3 mt-3"
                            style="background-color: #E7272D; margin-left:18px; width:20%">EN SAVOIR PLUS</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Images/images1 1.png') }}" alt="" srcset="" class="d-block w-100"
                    style="width: 100%; height:700px">
                <div class="carousel-caption d-none d-md-block" style="margin-bottom: 190px">
                    <h1 class="text-uppercase" style="font-size: 84px">Faite votre <span
                            style="color: #E7272D">commande</span></h2>
                        <a href="#" class="btn text-white py-3 mt-3"
                            style="background-color: #E7272D; margin-left:18px; width:20%">EN SAVOIR PLUS</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="mt-5">
        <h2 class="text-center">Top 3 produits</h2>
    </div>
    <div class="container-fluid d-flex justify-content-center flex-wrap">
        <div class="mt-5 px-5">
            <div class="card" style="width: 15rem;">
                <img src="{{ asset('Images/plat1.png') }}" alt="logo">
                <div class="card-body">
                    <h5 class="card-title text-center">Riz au Poisson</h5>
                    <hr style="color: #E7272D">
                    <p class="card-text text-center">3550 FCFA</p>
                    <a href="#" class="btn text-white" style="background-color: #E7272D; margin-left:18px">AJOUTER AU
                        PANIER</a>
                </div>
            </div>
        </div>


        <div class="mt-5 px-5">

            <div class="card" style="width: 15rem;">
                <img src="{{ asset('Images/plat1.png') }}" alt="logo">
                <div class="card-body">
                    <h5 class="card-title text-center">Riz au Poisson</h5>
                    <hr style="color: #E7272D">
                    <p class="card-text text-center">3550 FCFA</p>
                    <a href="#" class="btn text-white" style="background-color: #E7272D; margin-left:18px">AJOUTER
                        AU PANIER</a>
                </div>
            </div>
        </div>


        <div class="mt-5 px-5">

            <div class="card" style="width: 15rem;">
                <img src="{{ asset('Images/plat1.png') }}" alt="logo">
                <div class="card-body">
                    <h5 class="card-title text-center">Riz au Poisson</h5>
                    <hr style="color: #E7272D">
                    <p class="card-text text-center">3550 FCFA</p>
                    <a href="#" class="btn text-white" style="background-color: #E7272D; margin-left:18px">AJOUTER
                        AU PANIER</a>
                </div>
            </div>
        </div>

    </div>

{{-- 
    <div style="background-image: url('{{ asset('Images/Rectangle 8.png') }}'); height: 100vh"> --}}
        <div>
        <div class="mt-5">
            <div class="card bg-white w-75 container-fluid d-flex justify-content-center">
                <h1 class="text-center mt-5">RESERVATION</h1>
                <div class="row g-2 py-5 mx-5">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control w-75" id="floatingInputGrid"
                                placeholder="Nombre de personne" value="">
                            <label for="floatingInputGrid">Nombre de personnes</label>
                        </div>
                    </div>
    
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control w-75" id="" placeholder="Date prevu"
                                value="">
                            <label for="floatingInputGrid">Date prevu</label>
                        </div>
                    </div>
                </div>
    
                <div class="row g-2  py-5 mx-5">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control w-75" id="floatingInputGrid"
                                placeholder="Nombre de personne" value="">
                            <label for="floatingInputGrid">Numero Telephone</label>
                        </div>
                    </div>
    
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control w-75" id="" placeholder="Heure prevu"
                                value="">
                            <label for="floatingInputGrid">Heure prevu</label>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn text-white w-25" style="background-color: #E7272D; margin-left:35%">RESERVER MAINTENANT</a>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    </div>
@endsection
