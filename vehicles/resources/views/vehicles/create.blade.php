@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3>Create a vehicle</h3>
            <form action="">
                @csrf
                <div class="mb-3">
                    <label for="brand">Brand</label>
                    <input type="text" id="brand" name="brand" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="model">Model</label>
                    <input type="text" id="model" name="model" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="plate_number">Plate number</label>
                    <input type="text" id="plate_number" name="plate_number" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="insurance_date">Insurance date</label>
                    <input type="date" id="insurance_date" name="insurance_date" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @vite(['resources/js/storeVehicle.js'])
@endsection

