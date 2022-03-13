<div class="container">
    <div class="row"><p class="is-size-1">Admin</p></div>

    <div class="row mt-3">
        <p class="is-size-2">Pizzas</p>
    </div>

    <div class="row">
        <div class="columns">
            <div class="column is-one-quarter"><strong>Name</strong></div>
            <div class="column"><strong>Ingredients</strong></div>
            <div class="column is-one-quarter"><strong>Actions</strong></div>
        </div>
    </div>
    @foreach($pizzas as $pizza)
        <div class="row">
            <div class="columns">
                <div class="column is-one-quarter">{{$pizza->name}}</div>
                <div class="column">
                    <ul>
                    @foreach($pizza->ingredients as $ingredient)
                        <li>{{$ingredient->name}}</li>
                    @endforeach
                    </ul>
                </div>
                <div class="column is-one-quarter"></div>
            </div>
        </div>
    @endforeach

    <div class="row mt-3">
        <button class="button">Manage Ingredients</button>
    </div>

</div>
