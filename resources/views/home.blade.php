@extends('layouts.app')

@section('content')

    {{-- Carossel --}}

    <div id="carouselExampleFade" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('poke_bowl-1920-darken.jpg') }}" class="d-block w-100 item" alt="...">
                <div class="carousel-caption d-none d-md-block" style="bottom: 30%">
                    <h6 class="text-white fw-bold carousel-text" style="font-size: 40px">BEM-VINDO AO POKE BOWL</h6>
                    <h1 class="display-1 text-white fw-bold carousel-text">Diversos tipos de bowl para você escolher</h1>
                    <a href="#" class="btn btn-carousel">CARDÁPIO</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('tuna_poke_4k_darken.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="bottom: 30%">
                    <h6 class="text-white fw-bold carousel-text" style="font-size: 40px">BEM-VINDO AO POKE BOWL</h6>
                    <h1 class="display-1 text-white fw-bold carousel-text">Pokes feitos com todo o carinho para uma alimentação saudável</h1>
                    <a href="#" class="btn btn-carousel">CARDÁPIO</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('poke_ingredients_4k_darken.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="bottom: 30%">
                    <h6 class="text-white fw-bold carousel-text" style="font-size: 40px">BEM-VINDO AO POKE BOWL</h6>
                    <h1 class="display-1 text-white fw-bold carousel-text">Ingredientes frescos selecionados especialmente para você</h1>
                    <a href="#" class="btn btn-carousel">CARDÁPIO</a>
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

@endsection
