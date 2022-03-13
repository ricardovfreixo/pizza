<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'app_name' => 'iMusicalPizza',
            'version' => '0.1-alpha'
        ]);
    }

    public function showIngredients(): JsonResponse
    {
        return response()->json([]);
    }

    public function showPizzas(): JsonResponse
    {
        return response()->json(Pizza::with('ingredients')->get());
    }
}
