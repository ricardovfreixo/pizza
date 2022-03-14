<?php

namespace App\Repositories;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Collection;
use Request;

class PizzaMakerRepository
{
    public function getBasePrice(): int
    {
        return 500;
    }

    

    public function listAll(): Collection|array
    {
        return Pizza::with('ingredients')->get();
    }

    public function validatePizza(Request $request): array
    {
        $payload = ['status'=>0];



        return $payload;
    }
}
