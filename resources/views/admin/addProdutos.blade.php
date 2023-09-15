@extends('layouts.app')

@section('content')
    <div class="product-form-container">
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="name" class="form-label">Produto</label>
                <input type="text" class="form-control" id="name" placeholder="Digite o nome do produto" name="name">
            </div>
            <div class="col-md-6">
                <label for="description" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Digite a descrição do produto">
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Tipo</label>
                <select id="type" class="form-select" name="type">
                    <option selected>Selecione...</option>
                    <option>Poke</option>
                    <option>Bebida</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="price" class="form-label">Preço</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Digite um preço">
            </div>
            <div class="col-12">
                <label for="image" class="form-label">Imagem do Produto</label>
                <input class="form-control" type="file" id="image" name="image">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-add">Salvar</button>
            </div>
        </form>
    </div>
    @include('layouts.sidebar')
@endsection
