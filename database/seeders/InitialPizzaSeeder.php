<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Pizza;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InitialPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'name' => 'Marguerita',
            'created_at' => Carbon::now()
        ]);

        $pizza = Pizza::first();

        DB::table('ingredients')->insert([
            ['name' => 'Tomato Sauce', 'price' => 100,'created_at' => Carbon::now()],
            ['name' => 'Cheese', 'price' => 100,'created_at' => Carbon::now()],
        ]);

        foreach (Ingredient::get() as $ing)
        {
            DB::table('ingredient_pizza')->insert([
                'pizza_id' => $pizza->id,
                'ingredient_id' => $ing->id
            ]);
        }
    }
}
