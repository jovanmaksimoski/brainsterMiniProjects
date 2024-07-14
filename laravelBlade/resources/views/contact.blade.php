@include('layout.master')
@include('layout.header')

<div class="content">
    @yield('content')
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <p>Name</p>
                <hr>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <p>Email Address</p>
                <hr>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <p>Phone Number</p>
                <hr>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-3 ">
                <p>Message</p>
                <textarea class="form-control" rows="5" cols="50"></textarea>
                <button class=" btn btn-info  text-uppercase mt-3">Send</button>

            </div>
        </div>
    </div>

@include('layout.footer')
