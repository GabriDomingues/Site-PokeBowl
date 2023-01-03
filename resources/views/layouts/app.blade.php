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

    <!-- Rodapé -->
    <div class="container footer-bg">
        <footer class="d-flex flex-wrap justify-content-center align-items-center py-3" style="height: 150px">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 footer-font">© 2022 Poke Bowl LTDA</span>
                <a class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg width="90" height="90" viewBox="0 0 80 80" fill="white"><path d="M18 13.7c-1.9 2.4-2.2 3.7-1.7 9.8.4 7 3.1 15.5 4.8 15.5.5 0 .9-1 .9-2.3 0-1.2.9-2.8 2-3.4 2.1-1.4 5-9.9 5-14.8 0-7.2-6.8-10.2-11-4.8zm7 .2c1.3 2.5 1.3 7.6-.1 12.6-2.3 8.5-4.4 7.9-5.5-1.6-.4-3.9-.2-6.5.9-9.2 1.8-4.1 3.1-4.7 4.7-1.8zm17 3.3c-1.3 6-1 20.3.4 20.3.5 0 1-1.6 1-3.5.1-4.6 1.7-5.4 2.8-1.4 1.1 4.3 3.4 6.1 5.8 4.7 1.2-.8 2.1-.8 2.8-.1 1.7 1.7 5.8.1 7.1-2.8.6-1.5.9-2.9.5-3.3-.4-.3-.9 0-1.1.6-1 2.7-4 5.6-5.1 4.9-.7-.4-1.2-2-1.2-3.7 0-2.4.4-2.9 2.3-2.9 3.1 0 5.7-2.9 5.7-6.3 0-3.1-1.3-4.1-4.5-3.3-3.1.8-6.5 7.2-6.5 12 0 4.4-1.7 5.6-2.6 1.9l-.8-3.8c-.2-.6.8-2.3 2.1-3.9 3.4-4 3-10.1-.7-10.1-1.8 0-3 1-4.7 4-2.6 4.7-2.9 3.8-.8-3.1l1.5-5.2c0-.1-.6-.2-1.4-.2-.9 0-1.9 1.9-2.6 5.2zm9 3.2c0 2.8-3.6 7.6-5.6 7.6-1.9 0-.9-4.4 1.8-8.3 2.2-3.1 3.8-2.8 3.8.7zm8.9 7.2c-1.3 1.6-3.9 1.9-3.9.3 0-1.5 2.1-5.3 3.4-6.1 1.6-1 2 4 .5 5.8zm-28.3-6.3C27 24.6 29.3 38 34.4 38c3 0 4.6-3.6 4.6-10.3 0-7.2-2.9-9.7-7.4-6.4zm5.9 2.8c.4 1.2.4 4.1 0 6.5-1 7.2-4.2 7.1-5.2-.3-.8-6.4 3.5-11.6 5.2-6.2zm31 19.6c-2 13-8.5 21.2-19.8 25.1-5.5 1.9-15.3 1.2-20.7-1.5-5.3-2.6-12-8.6-12-10.6 0-.8-.6-2-1.4-2.6s-1.6-2.4-1.9-3.9-1-4.3-1.5-6.2c-.8-2.8-1-3-1.1-1.1-.1 2.6 1.5 8.6 3 11.1.5.8 1.5 2.6 2.2 4 1.6 3.3 7 8 12.3 10.7 4.5 2.3 15 3.2 20.9 1.8C51.7 69.7 61 64.1 61 63c0-.4 1.4-2.1 3-3.8 1.7-1.8 3-4 3-5s.5-2.3 1-2.8c1.1-1.1 2.4-11.4 1.5-11.4-.2 0-.7 1.7-1 3.7zm-50.4-.1c-3.6 4.6-1.9 13 3.5 18 3.3 3.1 4 3 1.9-.2-1.3-2-1.4-2.8-.4-4 .6-.8 1.8-1.4 2.7-1.4 1.1 0 1.3.8.9 3.7-.5 2.6-.3 3.3.3 2.3 1.3-2 1.3-8 0-8-.6 0-.8-1.5-.4-4 1.2-7.6-4.3-11.7-8.5-6.4zm6.4 2.5c.9 2.8-.3 7.4-2.5 9.4-1.8 1.6-1.9 1.5-2.9-2.3-1.1-3.9-.8-6.5 1.1-8.9 1.2-1.6 3.6-.6 4.3 1.8zm12.2.6c1.6 5.3 1.1 15.6-.9 18-1 1.2-1.4 1-2.7-1.4-1.9-3.6-2-15.5-.2-17.7s.5-3.4-1.5-1.4c-3.6 3.6-2.9 17 1.2 21.6l2.4 2.7 1.9-2.2c3.8-4.5 3.6-20-.3-23.2-1.2-1-1.2-.4.1 3.6zM57.5 43c-1.2 1.9-1.8 17.7-.7 18.4 1.2.7 4.7-2.6 6.8-6.7 2.6-4.9.9-5.2-1.9-.4-1.6 2.6-3.1 4.7-3.4 4.7-.6 0 .3-10.5 1.3-14.5.6-2.5-.9-3.5-2.1-1.5zm-15.7 1.6c-1.1 1.1-1 17.8.2 20.8 1.2 3.1 3.5 3.4 5 .5.9-1.7 1.4-1.8 2.6-.8 3 2.5 4.5-1 5-11.7.3-6.7.1-9.2-.5-7.9-.5 1.1-1 4.7-1.1 8s-.5 7.1-1 8.5l-.7 2.5-1.2-2.9c-.6-1.5-1-5.7-.9-9.2.4-9.5-1.6-7.9-2.3 1.9-.3 4.5-1.1 9.2-1.7 10.2-1.4 2.5-1.3 3-2.1-9.8-.3-6-.9-10.5-1.3-10.1z"/></svg>
                </a>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.30-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.30.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.30.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.30-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.30-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.30 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg style="color:white" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg></a></li>
            </ul>
        </footer>
    </div>
</body>


</html>
