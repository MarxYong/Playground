{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div>
    <a href="/">{{ config('app.names', 'Student Site') }}</a>
    @guest
        @if (Route::has('login'))
            <a class="nav-link" href="/logging-in">{{ __('Login') }}</a>
            <h1>Welcome Back, {{Auth::user()->name}}</h1>
        @endif
        @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    @else
        {{ Auth::user()->name }}
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endguest
</div>
