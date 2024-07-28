@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-5">Најави се</h1>
            <div class="col-6 offset-3">
                <form action="{{ route('login') }}" method="POST" class="form-control p-5">
                    @csrf
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                    </div>
                    @error('password')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>

                    <button type="submit" class="btn btn-warning">Најави се</button>
                </form>
            </div>
        </div>
    </div>
@endsection
