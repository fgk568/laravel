<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Meal::with(['customer', 'food'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $meal = Meal::create($request->all());
        return response()->json($meal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Meal $meal)
    {
        return response()->json($meal->load(['customer', 'food']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meal $meal)
    {
        $meal->update($request->all());
        return response()->json($meal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meal $meal)
    {
        $meal->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}