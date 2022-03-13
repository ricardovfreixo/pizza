<?php

use App\Http\Controllers\ApiController;
use App\Http\Livewire\Admin;
use App\Http\Livewire\HomePage;
use Illuminate\Support\Facades\Route;



Route::get('/', HomePage::class)->name('homepage');
Route::get('/admin', Admin::class)->name('admin');

# ------------------------------------------------
# ## API ROUTES
# ------------------------------------------------

Route::prefix('api')->group(function(){
    Route::get('/',[ApiController::class,'index'])->name('api.index');
    Route::get('/ingredients',[ApiController::class,'showIngredients'])->name('api.ingredients');
    Route::get('/pizzas',[ApiController::class,'showPizzas'])->name('api.pizzas');
});
