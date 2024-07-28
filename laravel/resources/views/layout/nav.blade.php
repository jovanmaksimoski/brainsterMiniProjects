
<div class="container-fluid bg-warning">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img style="width: 50px" src="{{ asset('images/logo_footer_black.png') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://brainster.co/full-stack/">Академија за Програмирање</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://brainster.co/marketing/">Академија за Маркетинг</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://brainster.co/graphic-design/">Академија за Дизајн</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://blog.brainster.co/">Блог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Вработи наш студент</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">Најави Се</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Вработи наши студенти</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mail') }}" method="GET" class="">
                    <div class="mb-3">
                        <label for="email" class="form-label">Е-мејл</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" id="tel" name="tel" required>
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Компанија</label>
                        <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Испрати</button>
                </form>
            </div>
        </div>
    </div>
</div>
