<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CarController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::all()->load('brands');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $carValidated = $request->validate([
                'model' => 'required|string|max:30',
                'description' => 'required|string|max:100',
                'price' => 'required|decimal:2',
                'mileage' => 'required|decimal:2',
                'brand_id' => 'required|exists:brands'
            ]);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Incorrect data model',
                "error" => $e->errors()
            ],400);
        }
        $brand_id = $carValidated['brand_id'];
        unset($carValidated['brands']);

        $car = Car::create($carValidated);
        $car->brands()->attach($brand_id);

        return response()->json([
            'car' => $car->load('brands')
        ],201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::find($id);
        if(!$car){
            return response()->json([
                'message' => "car with id $id not found"
            ],404);
        }
        return response()->json([
            'car' => $car->load('brands')
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $carValidated = $request->validate([
                'model' => 'required|string|max:30',
                'description' => 'required|string|max:100',
                'price' => 'required|decimal:2',
                'mileage' => 'required|decimal:2',
            ]);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Incorrect data model',
                "error" => $e->errors()
            ],400);
        }
        $car = Car::find($id);
        if(!$car){
            return response()->json([
                'message' => "car with id $id not found"
            ],404);
        }
        $car->update($carValidated);
        return response()->json([
            'car' => $car
        ],200);
    }

     /**
     * Update the specified resource in storage wit brand.
     */
    public function UpdateBrand(Request $request, string $id)
    {
        try{
            $carValidated = $request->validate([
                'brand_id' => 'required|exists:brands'
            ]);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Incorrect data model',
                "error" => $e->errors()
            ],400);
        }
        $car = Car::find($id);
        if(!$car){
            return response()->json([
                'message' => "car with id $id not found"
            ],404);
        }
        $car->brands()->sync($carValidated['brand_id']);
        return response()->json([
            'car' => $car->load('brands')
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        if(!$car){
            return response()->json([
                'message' => "car with id $id not found"
            ],404);
        }
        $car->delete();
        return response()->json([
            'message' => "Car wit id $id deleted successfully"
        ],200);
    }
}
