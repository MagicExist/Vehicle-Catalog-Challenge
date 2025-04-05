<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class BrandController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Brand::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $brandValidated = $request->validate([
                'name' => 'required|string|max:20',
            ]);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Incorrect data model',
                "error" => $e->errors()
            ],400);
        }

        $brand = Brand::create($brandValidated);

        return response()->json([
            'brand' => $brand
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $brand = Brand::find($id);
        if(!$brand){
            return response()->json([
                'message' => "brand with id $id not found"
            ],404);
        }
        return response()->json([
            'brand' => $brand
        ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $brandValidated = $request->validate([
                'name' => 'required|string|max:20',
            ]);
        }
        catch(ValidationException $e){
            return response()->json([
                'message' => 'Incorrect data model',
                "error" => $e->errors()
            ],400);
        }

        $brand = Brand::find($id);

        if(!$brand){
            return response()->json([
                'message' => "brand with id $id not found"
            ],404);
        }

        $brand->update($brandValidated);

        return response()->json([
            'brand' => $brand
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
