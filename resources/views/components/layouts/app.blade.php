<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <nav class="navbar sticky-top bg-body-tertiary">
        <div class="container-fluid">
            @if (Route::has('login'))
                @auth
                    <a class="navbar-brand" href="#">Student-Enrolment-System</a>
                    <div class="navbar-end">
                        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                        <a href="{{ url('/admin/employee') }}">Employees</a>
                        <a href="{{ url('/admin/course') }}">Courses</a>
                        <a href="{{ url('/admin/office') }}">Office Sites</a>
                        <a href="{{ url('/admin') }}">{{ Auth::user()->name }}'s Profile</a>
                    </div>
                @else
                    <a class="navbar-brand" href="#">SOP</a>
                    <div class="navbar-end">
                        <a href="/" @class(['current', request()->is('/')])>Home</a>
                        <a href="/about" @class(['current', request()->is('about')])>About</a>
                        <a href="/contact">Contact</a>
                        <a href="{{ route('login') }}">Log In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    </div>
                @endauth
            @endif
        </div>
    </nav>
    <body>
        <div class="container-fluid">{{ $slot }}</div>
    </body>
</html>
