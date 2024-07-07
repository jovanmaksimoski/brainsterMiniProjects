<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Info Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{URL::asset('/images/264965-P4TIJM-916.jpg')}});
        }
        .content {
            flex: 1;
        }
        footer {
            background-color: saddlebrown;
        }
    </style>
</head>
<body>

<h1 class="text-white text-center my-5 fs-1 fw-bold">BUSINESS CASUAL</h1>

<nav style=" background-color: saddlebrown" class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav text-white">
            <li class="nav-item active">
                <a class="nav-link text-white fw-bold" href="{{ route('home') }}">HOME</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container content text-center  rounded p-5">
    <div class="row justify-content-center">
        <div class="col-6 p-md-5">
            <h1 class="text-white">Information Page:</h1>
            <p class="text-white">Name: {{ session('name') }}</p>
            <p class="text-white">LastName: {{ session('lastname') }}</p>
            <p class="text-white">Email: {{ session('email') }}</p>
            <a href="{{ route('home') }}" class="btn btn-warning text-white fw-bold">Go to Home</a>
            <form action="{{ route('clearSession') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-warning text-white fw-bold">Clear Session</button>
            </form>
        </div>
    </div>
</div>

<footer class="p-2 mt-5">
    <p class="text-white text-center mt-3">Copyright &copy; Business Casual 2024</p>
</footer>

</body>
</html>
