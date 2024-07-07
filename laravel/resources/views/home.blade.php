<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{URL::asset('/images/264965-P4TIJM-916.jpg')}});

    }
</style>
<body>

<h1 class="text-white text-center my-5 fs-1 fw-bold">BUSSINES CASUAL</h1>

<nav style=" background-color: saddlebrown" class="navbar navbar-expand-lg navbar-light  ">
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav text-white ">
            <li class="nav-item active ">
                <a class="nav-link text-white fw-bold" href="{{ url('home') }}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white fw-bold" href="{{ url('form') }}">LOG IN</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container ">
    <div class="row  my-5">
        <div class="row  justify-content-start align-items-center">
            <div class="col-md-4 position-absolute ">
                <div class="text text-center bg-white bg-opacity-75  p-3 rounded">
                    <h2>Lorem ipsum</h2>
                    <h1>Lorem ipsum</h1>
                    <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores debitis delectus et
                        ex impedit laborum laudantium obcaecati optio perspiciatis, repellendus reprehenderit ullam, ut
                        voluptatem! Doloribus neque odio voluptatum. Velit, voluptatem!</p>
                    <button class="btn btn-warning text-white">Visit us today</button>
                </div>
            </div>
            <div class="col-md-12   offset-2">
                <img class=" img img-fluid " src="{{url('/images/cafe.jpg')}}" alt="Image"/>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid ">
    <div class="row">

        <div class="bg-warning p-5">
            <div class="bg-white">
                <div style="border: double 5px orange" class="col text-center p-5  mt-3 ">
                    <h3>OUR PROMISE</h3>
                    <h3 class="text-decoration-underline"> {{ $name }} {{ $lastname }}</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquid atque delectus
                        dolores ea earum eveniet, facere fuga fugiat id illum, iste laudantium maxime nesciunt nihil
                        officiis placeat, provident qui quidem ratione sequi soluta ullam voluptate voluptatem
                        voluptates! Accusamus aliquam, aliquid beatae libero nulla omnis perferendis quam qui quia
                        quidem. Aliquam aut autem deserunt eaque eos et excepturi fugit, impedit iste minus officiis
                        perspiciatis porro repellat sit ullam voluptatem voluptatibus?</p>
                </div>
            </div>
        </div>
    </div>
</div>


<footer style="background-color: saddlebrown" class="p-2 mt-5">
    <p class="text-white text-center mt-3">Copyright &copy Business Casual 2024</p>
</footer>

</body>
</html>
