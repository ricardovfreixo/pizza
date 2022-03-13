<section class="section">
    <span class="is-size-2">Manage Ingredients</span>
</section>

<section class="section">
    @if($createIngredient)
        <input type="text" class="input" placeholder="Ingredient Name" wire:model="newIngredient.name">
        <input type="text" class="input" placeholder="Ingredient Price" wire:model="newIngredient.price">
        <button class="button has-background-success" wire:click="saveNewIngredient">Save</button>
        <button class="button has-background-danger" wire:click="resetCreateIngredient">Cancel</button>
    @else
        <button class="button has-background-primary" wire:click="toggleCreateIngredient">Create Ingredient</button>
    @endif
</section>
<section class="section">
    @foreach($ingredients as $ingredient)
        <div class="row">
            <div class="columns">
                <div class="column is-one-quarter">{{$ingredient->name}}</div>
                <div class="column is-one-quarter">&euro;{{number_format($ingredient->price/100,2)}}</div>
            </div>
        </div>
    @endforeach
</section>

<section class="section">
    <button class="button is-danger is-rounded" wire:click="toggleManageIngredients">Cancel</button>
</section>
