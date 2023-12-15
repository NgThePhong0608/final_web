<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FoodResource;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $foods = Food::paginate(5);
        // return response()->json([
        //     'success' => true,
        //     'message' => 'All foods in restaurant',
        //     'data' => FoodResource::collection($foods),
        // ], 200);
        $foods = DB::table('foods')->get();

        // Return a JSON response with success status, a message, and the data
        return response()->json([
            'success' => true,
            'message' => 'All foods in restaurant',
            'data' => $foods,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // create new food
        
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
        $food = Food::find($id);
        if (!$food) {
            return response()->json(['error' => 'Food not found'], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Food details',
            'data' => new FoodResource($food),
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // TODO: Implement update() method.
        $food = Food::find($id);
        if (!$food) {
            return response()->json(['error' => 'Food not found'], 404);
        }
        $food->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Food update successfully',
            'data' => new FoodResource($food),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $food = Food::find($id);
        if (!$food) {
            return response()->json(['error' => 'Food not found'], 404);
        }
        $food->delete();
        return response()->json([
            'success' => true,
            'message' => 'Food deleted successfully',
        ], 200);
    }
}
