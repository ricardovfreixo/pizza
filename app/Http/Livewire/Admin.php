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
    public bool $manageIngredients;
    public bool $createIngredient;
    public array $newIngredient;

    public function mount()
    {
        $this->pizzas = PizzaMaker::listAll();
        $this->ingredients = IngredientRepository::listAll();
        $this->manageIngredients = false;
        $this->createIngredient = false;
        $this->resetCreateIngredient();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.admin');
    }

    public function toggleManageIngredients() {
        $this->manageIngredients = !$this->manageIngredients;
    }
    public function toggleCreateIngredient() {
        $this->createIngredient = true;
    }
    public function resetCreateIngredient()
    {
        $this->createIngredient = false;
        $this->newIngredient = ['name'=>'','price'=>0];
    }

    public function saveNewIngredient()
    {

    }
}
