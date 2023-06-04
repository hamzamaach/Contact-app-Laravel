<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <title>Contact-App</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-white bg-white">
    <div class="container">
        <a class="navbar-brand" href="#">Contact App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <button class="btn btn-outline-dark">Login</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-outline-primary">Register</button>
                </li>
                <li class="nav-item">
                    <select class="form-select"></select>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container bg-light">
    @yield('content')
</div>
</body>
</html>
