@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create new Team') }}</div>

                <div class="card-body">
                    @include('errors')
                    <form action="{{ route('teams.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="yearOfFoundation">Year of foundation</label>
                            <input type="number" class="form-control" id="yearOfFoundation" name="yearOfFoundation" placeholder="Year founded" value="{{ old('yearOfFoundation') }}">
                        </div>
                        <button class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
