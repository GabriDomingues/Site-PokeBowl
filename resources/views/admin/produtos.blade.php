@extends('layouts.app')

@section('content')
    <div class="product-container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" STYLE="width: 996px">
                    <h5 class="card-header h5">Produtos<a href="{{ route('addProdutos') }}" class="btn btn-add" style="margin-left: 720px">Adicionar</a></h5>
                    <div class="card-body">
                        <h5 class="card-title">Listagem dos produtos</h5>
                    </div>
                </div>
            </div>
        </div>
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

