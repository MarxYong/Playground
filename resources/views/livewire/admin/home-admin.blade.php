<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div>
    <div class="container">
        <header
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <h3>{{ config('app.names', 'Admin Site') }}</h3>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                <li><a href="#" class="nav-link px-2">Features</a></li>
                <li><a href="#" class="nav-link px-2">Pricing</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="/logging-in">{{ __('Login') }}</a>
                        <h1>hello</h1>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end show" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
            </header>
            <header>
                <div class="px-3 py-2 text-bg-dark border-bottom">
                    <div class="container">
                        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                            <a href="/"
                                class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                                    <use xlink:href="#bootstrap"></use>
                                </svg>
                            </a>

                            <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                                <li>
                                    <a href="#" class="nav-link text-secondary">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="#home"></use>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="#speedometer2"></use>
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="#table"></use>
                                        </svg>
                                        Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="#grid"></use>
                                        </svg>
                                        Products
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link text-white">
                                        <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                            <use xlink:href="#people-circle"></use>
                                        </svg>
                                        Customers
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="px-3 py-2 border-bottom mb-3">
                    <div class="container d-flex flex-wrap justify-content-center">
                        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                        </form>

                        <div class="text-end">
                            <button type="button" class="btn btn-light text-dark me-2">Login</button>
                            <button type="button" class="btn btn-primary">Sign-up</button>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.names', 'Bretinga') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->


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

    <main class="py-4">
        @yield('content')
    </main>
</div>
</div>
<img width="300" height="300" src="" alt="Marcus Yong at work with a colleague" />
