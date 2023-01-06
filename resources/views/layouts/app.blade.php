<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #8DC264">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="rounded-circle" alt="avatar1" src="{{ asset('images/poke_bowl_80x80.jpg') }}"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link header-font"  href="{{ route('login') }}"  >{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link header-font" href="{{ route('register') }}">{{ __('Cadastro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="" style="background-color: #F2F2F2">
            @yield('content')
        </main>
    </div>

    <!-- Footer -->

    <footer class="footer-bg">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 footer-font" style="text-align: center; position: relative; bottom: 30px;">
                        <div>
                            <svg class="mb-2" width="130" height="130" viewBox="0 0 80 80" fill="white"><path d="M18 13.7c-1.9 2.4-2.2 3.7-1.7 9.8.4 7 3.1 15.5 4.8 15.5.5 0 .9-1 .9-2.3 0-1.2.9-2.8 2-3.4 2.1-1.4 5-9.9 5-14.8 0-7.2-6.8-10.2-11-4.8zm7 .2c1.3 2.5 1.3 7.6-.1 12.6-2.3 8.5-4.4 7.9-5.5-1.6-.4-3.9-.2-6.5.9-9.2 1.8-4.1 3.1-4.7 4.7-1.8zm17 3.3c-1.3 6-1 20.3.4 20.3.5 0 1-1.6 1-3.5.1-4.6 1.7-5.4 2.8-1.4 1.1 4.3 3.4 6.1 5.8 4.7 1.2-.8 2.1-.8 2.8-.1 1.7 1.7 5.8.1 7.1-2.8.6-1.5.9-2.9.5-3.3-.4-.3-.9 0-1.1.6-1 2.7-4 5.6-5.1 4.9-.7-.4-1.2-2-1.2-3.7 0-2.4.4-2.9 2.3-2.9 3.1 0 5.7-2.9 5.7-6.3 0-3.1-1.3-4.1-4.5-3.3-3.1.8-6.5 7.2-6.5 12 0 4.4-1.7 5.6-2.6 1.9l-.8-3.8c-.2-.6.8-2.3 2.1-3.9 3.4-4 3-10.1-.7-10.1-1.8 0-3 1-4.7 4-2.6 4.7-2.9 3.8-.8-3.1l1.5-5.2c0-.1-.6-.2-1.4-.2-.9 0-1.9 1.9-2.6 5.2zm9 3.2c0 2.8-3.6 7.6-5.6 7.6-1.9 0-.9-4.4 1.8-8.3 2.2-3.1 3.8-2.8 3.8.7zm8.9 7.2c-1.3 1.6-3.9 1.9-3.9.3 0-1.5 2.1-5.3 3.4-6.1 1.6-1 2 4 .5 5.8zm-28.3-6.3C27 24.6 29.3 38 34.4 38c3 0 4.6-3.6 4.6-10.3 0-7.2-2.9-9.7-7.4-6.4zm5.9 2.8c.4 1.2.4 4.1 0 6.5-1 7.2-4.2 7.1-5.2-.3-.8-6.4 3.5-11.6 5.2-6.2zm31 19.6c-2 13-8.5 21.2-19.8 25.1-5.5 1.9-15.3 1.2-20.7-1.5-5.3-2.6-12-8.6-12-10.6 0-.8-.6-2-1.4-2.6s-1.6-2.4-1.9-3.9-1-4.3-1.5-6.2c-.8-2.8-1-3-1.1-1.1-.1 2.6 1.5 8.6 3 11.1.5.8 1.5 2.6 2.2 4 1.6 3.3 7 8 12.3 10.7 4.5 2.3 15 3.2 20.9 1.8C51.7 69.7 61 64.1 61 63c0-.4 1.4-2.1 3-3.8 1.7-1.8 3-4 3-5s.5-2.3 1-2.8c1.1-1.1 2.4-11.4 1.5-11.4-.2 0-.7 1.7-1 3.7zm-50.4-.1c-3.6 4.6-1.9 13 3.5 18 3.3 3.1 4 3 1.9-.2-1.3-2-1.4-2.8-.4-4 .6-.8 1.8-1.4 2.7-1.4 1.1 0 1.3.8.9 3.7-.5 2.6-.3 3.3.3 2.3 1.3-2 1.3-8 0-8-.6 0-.8-1.5-.4-4 1.2-7.6-4.3-11.7-8.5-6.4zm6.4 2.5c.9 2.8-.3 7.4-2.5 9.4-1.8 1.6-1.9 1.5-2.9-2.3-1.1-3.9-.8-6.5 1.1-8.9 1.2-1.6 3.6-.6 4.3 1.8zm12.2.6c1.6 5.3 1.1 15.6-.9 18-1 1.2-1.4 1-2.7-1.4-1.9-3.6-2-15.5-.2-17.7s.5-3.4-1.5-1.4c-3.6 3.6-2.9 17 1.2 21.6l2.4 2.7 1.9-2.2c3.8-4.5 3.6-20-.3-23.2-1.2-1-1.2-.4.1 3.6zM57.5 43c-1.2 1.9-1.8 17.7-.7 18.4 1.2.7 4.7-2.6 6.8-6.7 2.6-4.9.9-5.2-1.9-.4-1.6 2.6-3.1 4.7-3.4 4.7-.6 0 .3-10.5 1.3-14.5.6-2.5-.9-3.5-2.1-1.5zm-15.7 1.6c-1.1 1.1-1 17.8.2 20.8 1.2 3.1 3.5 3.4 5 .5.9-1.7 1.4-1.8 2.6-.8 3 2.5 4.5-1 5-11.7.3-6.7.1-9.2-.5-7.9-.5 1.1-1 4.7-1.1 8s-.5 7.1-1 8.5l-.7 2.5-1.2-2.9c-.6-1.5-1-5.7-.9-9.2.4-9.5-1.6-7.9-2.3 1.9-.3 4.5-1.1 9.2-1.7 10.2-1.4 2.5-1.3 3-2.1-9.8-.3-6-.9-10.5-1.3-10.1z"/></svg>
                        </div>
                        <p>© 2022 Poke Bowl LTDA</p>
                        <div class="social-links ">
                            <svg class="instagram-icon" fill="white" width="45" height="45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            <svg class="facebook-icon" fill="white" width="44" height="44" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
                            <svg class="whatsapp-icon" fill="white" width="45" height="45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                        </div>
                    </div>
                    <div class="col-lg-3 footer-font ms-auto mx-2">
                        <h6 class="text-white mb-4">CONTATO</h6>
                        <p class="mb-2">Telefone: (41)0000-0000</p>
                        <p class="mb-2">E-mail: contato@pokebowl.com.br</p>
                        <p class="mb-4">Endereço: Curitiba, rua Rocha Pombo, número 000, cabral</p>
                    </div>
                    <div class="col-lg-3 footer-font">
                        <h6 class="text-white mb-4">HORÁRIOS</h6>
                        <p class="mb-2">Dias de semana - 11h às 23h</p>
                        <p class="mb-4">Finais de semana - 11h às 21h</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>


</html>
