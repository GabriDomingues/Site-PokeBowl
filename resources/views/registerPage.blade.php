@extends('layouts.app')

@section('content')


    <div class="container" style="padding-bottom: 130px; padding-top: 120px;">
        <div class="row justify-content-center">
            <div class="col-md-8" >
                <div class="card shadow">
                    <div class="card-body">
                        <div>
                            <h3>Cadastro</h3>
                            <hr class="mt-2 mb-3 header-div">
                        </div>
                        <form class="row g-3" method="POST" action="{{ route('register') }}" style="font-family: sans-serif">
                            @csrf
                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class=" form-content fw-bold form-control @error('email')  @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="col-md-3 {{ $errors->has('cpf') ? 'has-error' : ''}}">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-content form-control fw-bold" id="cpf" name="cpf" value="{{ old('cpf') }}" autocomplete="off" maxlength="14" required="required" autofocus="autofocus">
                                {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
                                <div class="help-block with-errors"></div>
                            </div>




                            <div class="col-md-3">
                                <label for="cep" class="form-label">CEP</label>
                                <input type="text" class="form-content form-control fw-bold" id="cep" maxlength="9" name="cep">
                            </div>
                            <div class="col-7">
                                <label for="adress" class="form-label">Endereço</label>
                                <input type="text" class="form-content form-control fw-bold" id="adress" placeholder="" name="adress">
                            </div>
                            <div class="col-2">
                                <label for="adress_number" class="form-label">Número</label>
                                <input type="number" class="form-content form-control fw-bold" id="adress_number" placeholder="" name="adress_number">
                            </div>
                            <div class="col-3">
                                <label for="phone" class="form-label">Celular</label>
                                <input type="text" class="form-content form-control fw-bold" id="phone" placeholder="" maxlength="14" name="phone">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Senha</label>
                                <input id="password" type="password" class="form-content fw-bold form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                                <input id="password_confirmation" type="password" class="form-content form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Concordo com os Termos de Uso
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-carousel shadow-sm">{{ __('Salvar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    $(document).ready(function() {
        $('#cpf').mask('000.000.000-00', {reverse: true});
    });
</script>
