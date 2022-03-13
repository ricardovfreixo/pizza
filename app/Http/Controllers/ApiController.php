<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PizzaMaker;

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
        return response()->json([
            \IngredientRepository::listAll()
        ]);
    }

    public function showPizzas(): JsonResponse
    {
        return response()->json(
            PizzaMaker::listAll()
        );
    }
}
