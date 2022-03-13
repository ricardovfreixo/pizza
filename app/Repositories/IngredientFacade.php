<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Facade;

class IngredientFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    { return 'ingredient'; }
}
