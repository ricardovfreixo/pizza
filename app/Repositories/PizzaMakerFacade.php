<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Facade;

class PizzaMakerFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    { return 'pizza'; }
}
