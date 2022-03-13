<?php

namespace App\Repositories;

use App\Models\Pizza;
use Illuminate\Database\Eloquent\Collection;

class PizzaMakerRepository
{
    public function listAll(): Collection|array
    {
        return Pizza::with('ingredients')->get();
    }

}
