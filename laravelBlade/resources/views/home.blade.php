@include('layout.master')
@include('layout.header')

<div class="content">
    @yield('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <h1>Lorem ipsum.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, vel!</p>
                <hr class="">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <h1>Lorem ipsum.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, vel!</p>
                <hr class="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <h1>Lorem ipsum.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, vel!</p>
                <hr class="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <h1>Lorem ipsum.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, vel!</p>
                <hr>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class="col-9 d-flex justify-content-end ">
            <button class=" btn btn-info">Older posts -></button>
        </div>
    </div>
</div>
</div>
@include('layout.footer')


