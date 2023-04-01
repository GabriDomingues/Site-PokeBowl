@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: #ffffff">
        <h1 class="titulo-menu">Menu</h1>
            <div class="row g-4 py-5">

                @foreach($products as $product)

                <div class="col-md-3">
                    <div class="card h-100">
                        <img src={{ asset('img/products/' . $product->image) }} class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 255) }}</p>
                            <p class="">R${{ number_format($product->price, 2, ',', '.') }}</p>
                            <form action="{{ url('addCart') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <button class="btn btn-add shadow">Adicionar</button>
                            </form>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
    </div>

@endsection
