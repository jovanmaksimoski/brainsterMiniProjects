<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{URL::asset('/images/264965-P4TIJM-916.jpg')}});

    }
</style>
<body >
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

<h1 class="text-white text-center my-5 fs-1 fw-bold">BUSINESS CASUAL</h1>

<nav style=" background-color: saddlebrown" class="navbar navbar-expand-lg navbar-light">
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav text-white">
            <li class="nav-item active">
                <a class="nav-link text-white fw-bold" href="{{ route('home') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white fw-bold" href="{{ url('form') }}">LOG IN</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container content">
    <div class="row justify-content-center">
        <div class="col-6 p-md-5 ">
            <form action="{{ route('submit') }}" method="POST" class="p-5 mt-5">
                @csrf
                <div class="form-group text-white py-2">

                    <label for="name" class="fw-bold">Name</label>
                    @error('name')
                    <div class="text-danger fw-bold">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">

                </div>
                <div class="form-group text-white py-2">
                    <label for="lastname" class="fw-bold">Last Name</label>
                    @error('lastname')
                    <div class="text-danger fw-bold">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">

                </div>
                <div class="form-group text-white py-2">
                    <label for="email" class="fw-bold">Email address</label>
                    @error('email')
                    <div class="text-danger fw-bold">{{ $message }}</div>
                    @enderror
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">

                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>

<footer class="p-2 mt-5">
    <p class="text-white text-center mt-3">Copyright &copy; Business Casual 2024</p>
</footer>
</body>
</html>
