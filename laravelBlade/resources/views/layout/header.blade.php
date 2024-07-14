@include('layout.master')

<style>
    .bg-image {
        background-size: cover;
        background-position: center;
        height: 400px;

    }
</style>


<div class="bg-image" style=" background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset($url) }}');
">
    <div class="container-lg">
        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand mr-auto text-white text-uppercase" href= {{route('home')}}>Blog</a>
            <div class=" navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white  text-uppercase" href= {{route('home')}}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-uppercase" href= {{route('about')}}>About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-uppercase" href= {{route('post')}}>Sample Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-uppercase" href= {{route('contact')}}>Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>

    <div class="container d-flex justify-content-center align-items-center my-5 h-50">
        <div class="row ">
            <div class="col-md-12 text-white text-center">
                <h1 class="fw-bold">{{$title}}</h1>
                <h6>Lorem ipsum dolor sit amet.</h6>
            </div>
        </div>
    </div>

</div>


