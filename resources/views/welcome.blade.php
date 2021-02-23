<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>

<body class="antialiased">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="#" style="padding-left: 10px;">MOVIELIST</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/dashboard') }}" class="navItem">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="navItem">Log in</a>
                    </li>

                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="navItem">Register</a>
                        @endif
                    </li>

                    @endauth
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <br><br><br>
        <div class="row row-cols-2 row-cols-xs-1">
            <div class="col d-flex align-items-center">
                <h1 class="text-right">YOUR MOVIE LIST</h1>
            </div>
            <div class="col">
                <img src="{{ asset('images/home-img-01.png') }}" class="img-fluid " alt="...">
            </div>
        </div>

    </div>



    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>