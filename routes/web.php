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
    Route::get('/ingredient',[ApiController::class,'showIngredients'])->name('api.ingredient');
    Route::get('/pizza',[ApiController::class,'showPizzas'])->name('api.pizza');
    Route::post('/pizza',[ApiController::class,'validatePizza'])->name('api.pizza.validate');
});
