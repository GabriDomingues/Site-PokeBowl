@extends('layouts.app')

@section('content')

    <div class="product-container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" STYLE="width: 996px">
                    <h5 class="card-header h5">Produtos<a href="{{ route('addProdutos') }}" class="btn btn-add" style="margin-left: 720px">Adicionar</a></h5>
                    <div class="card-body">
                        @foreach($products as $product)
                        <tr>
                            <td class="card-title">Listagem dos produtos</td>
                            <td class="card-title">Listagem dos produtos</td>
                            <td class="card-title">Listagem dos produtos</td>
                            <td class="card-title">Listagem dos produtos</td>
                        </tr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.sidebar')

@endsection

