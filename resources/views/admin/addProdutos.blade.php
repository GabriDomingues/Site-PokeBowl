@extends('layouts.app')

@section('content')
    <div class="product-form-container">
        <form class="row g-3">
            <div class="col-12">
                <label for="produto" class="form-label">Produto</label>
                <input type="text" class="form-control" id="produto" placeholder="Digite o nome do produto...">
            </div>
            <div class="col-md-6">
                <label for="descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="descricao">
            </div>
            <div class="col-md-4">
                <label for="tipo" class="form-label">Tipo</label>
                <select id="tipo" class="form-select">
                    <option selected>Selecione...</option>
                    <option>Poke</option>
                    <option>Bebida</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco">
            </div>
            <div class="col-12">
                <label for="arquivo" class="form-label">Imagem do Produto</label>
                <input class="form-control" type="file" id="arquivo">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-add">Salvar</button>
            </div>
        </form>
    </div>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 900px">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="{{ url('admin/dashboard') }}" class="nav-link text-white" aria-current="page">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#dashboard"></use></svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ url('admin/pedidos') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#pedidos"></use></svg>
                    Pedidos
                </a>
            </li>
            <li>
                <a href="" class="nav-link active">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#produtos"></use></svg>
                    Produtos
                </a>
            </li>
            <li>
                <a href="{{ url('admin/clientes') }}" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#clientes"></use></svg>
                    Clientes
                </a>
            </li>
        </ul>
        <hr>
    </div>

@endsection
