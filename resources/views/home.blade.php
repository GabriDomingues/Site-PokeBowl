@extends('layouts.app')

@section('content')

    {{-- Carossel --}}

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/poke_bowl-1920-darken.jpg') }}" class="d-block w-100 item" alt="...">
                <div class="carousel-caption d-md-block">
                    <h6 class="text-white fw-bold carousel-text">BEM-VINDO AO POKE BOWL</h6>
                    <h1 class="text-white carousel-text fw-bold">Diversos sabores de poke bowl para você escolher e saborear</h1>
                    <a href="#" class="btn btn-carousel mt-2">Cardápio</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/tuna_poke_4k_darken.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h6 class="text-white fw-bold carousel-text">BEM-VINDO AO POKE BOWL</h6>
                    <h1 class="text-white fw-bold carousel-text">Pokes feitos com todo o carinho para uma alimentação saudável</h1>
                    <a href="#" class="btn btn-carousel mt-2">Cardápio</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/poke_ingredients_4k_darken.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block">
                    <h6 class="text-white fw-bold carousel-text">BEM-VINDO AO POKE BOWL</h6>
                    <h1 class="text-white fw-bold carousel-text">Ingredientes frescos selecionados especialmente para você</h1>
                    <a href="#" class="btn btn-carousel mt-2">Cardápio</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Sobre nós --}}

    <section id="sobre" class="imagem-sobre mt-5">
        <div class="container m-0">
            <div class="row gy-4 align-items-center centering">
                <div class="col-lg-5">
                    <img class="imagem-responsiva" src="{{ asset('images/sobre.jpg') }}" alt="sobre">
                </div>
                <div class="col-lg-4 texto-sobre p-4">
                    <h1>Sobre nós</h1>
                    <div class="divider my-4"></div>
                    <p>Buscando a satisfação dos nossos clientes e através de inúmeras pesquisas, o Poke Bowl surgiu para satisfazer as necessidades de uma comida deliciosa e ao mesmo tempo saudável. O convidamos para conhecer o nosso restaurante ou fazer um pedido através do nosso site.</p>
                    <p>Nosso restaurante fica em Curitiba na rua Rocha Pombo, número 000, próximo ao terminal do Cabral. Estamos ansiosos aguardando a sua visita!</p>
                    <a href="#" class="btn btn-carousel mx-4">Peça Online</a>
                </div>
            </div>
        </div>
    </section>

@endsection
