@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/vehicles/create" class="btn btn-primary mb-2">Create vehicle</a>
            <div class="card">
                <div class="card-header">{{ __('Vehicles') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table" id="vehicleTable">
                        <thead>
                            <tr>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Plate number</th>
                                <th scope="col">Insurance date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/fetchAllVehicles.js', 'resources/js/deleteVehicle.js']);
@endsection
