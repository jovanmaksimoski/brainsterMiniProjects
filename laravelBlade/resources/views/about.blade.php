@include('layout.master')

@include('layout.header')


<div class="content">
    @yield('content')
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-4 ">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolor dolore ducimus eligendi
                    est explicabo fuga fugit inventore iste iusto, laboriosam laborum libero pariatur placeat porro
                    soluta sunt veritatis voluptate?</p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4 ">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut autem dignissimos distinctio
                    dolor dolorem eligendi enim et hic in itaque neque nihil, perferendis provident repellat
                    reprehenderit ut velit vero.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-4 ">

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet dolores, labore maxime nemo placeat
                    temporibus voluptatum! e.</p>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
