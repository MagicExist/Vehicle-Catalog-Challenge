<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Car::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            'car' => $car
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
