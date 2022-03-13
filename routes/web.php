<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

# ------------------------------------------------
# ## API ROUTES
# ------------------------------------------------

Route::prefix('api')->group(function(){
    Route::get('/',[ApiController::class,'index'])->name('api.index');
    Route::get('/ingredients',[ApiController::class,'showIngredients']);
    Route::get('/pizzas',[ApiController::class,'showPizzas']);
});
