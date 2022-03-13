<?php

namespace App\Providers;

use App\Repositories\IngredientRepository;
use App\Repositories\PizzaMakerRepository;
use Illuminate\Support\ServiceProvider;

class PizzaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('pizza', function(){ return new PizzaMakerRepository(); });
        app()->bind('ingredient', function(){ return new IngredientRepository(); });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
