<?php

namespace App\Repositories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Collection;

class IngredientRepository
{
    public function listAll(): Collection|array
    {
        return Ingredient::with('pizzas')->get();
    }

}
