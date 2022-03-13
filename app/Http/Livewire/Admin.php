<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Illuminate\Support\Collection;
use PizzaMaker;
use IngredientRepository;

class Admin extends Component
{
    public Collection $pizzas;
    public Collection $ingredients;

    public function mount()
    {
        $this->pizzas = PizzaMaker::listAll();
        $this->ingredients = IngredientRepository::listAll();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin');
    }
}
