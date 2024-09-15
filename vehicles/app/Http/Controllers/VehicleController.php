<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Http\Requests\VehicleRequest;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return response()->json($vehicles);
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(VehicleRequest $request)
    {
        $vehicle = Vehicle::create([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'plate_number' => $request->input('plate_number'),
            'insurance_date' => $request->input('insurance_date'),
        ]);
        
        if($vehicle){
            return response()->json(['message' => 'Vehicle record created successfully'], 201);
        }
    
        return response()->json(['message' => 'Something went wrong'], 400);
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);

        return view('vehicles.edit', ['vehicle' => $vehicle]);
    }

    public function update(VehicleRequest $request, $id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['message' => 'Vehicle not found'], 404);
        }

        $updated = $vehicle->update([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'plate_number' => $request->input('plate_number'),
            'insurance_date' => $request->input('insurance_date'),
        ]);

        if ($updated) {
            return response()->json(['message' => 'Vehicle record updated successfully'], 200);
        }

        return response()->json(['message' => 'Something went wrong'], 400);
    }


    public function delete($id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['message' => 'Vehicle not found'], 404);
        }

        $vehicle->delete();

        return response()->json(['message' => 'Vehicle record soft-deleted successfully'], 200);
    }

}
