# iMusician pizza maker


## The assignment task is the following:

---

### Implement endpoints to order pizza with all necessary models, middlewares etc.


* System should have a predefined list of pizzas with ingredients
* Pizza should have a base price
* Final price of pizza is \<base price> + \<price of all ingredients>
* It should be possible to add the same ingredient multiple times
* Some ingredients should be always part of pizza (for example you cannot remove tomato sauce)
* User should be allowed to modify pizza added to order by adding/removing pre-defined ingredients
* Adding/removing of ingredients should change final price of pizza ordered

---

## Install

Make use you have sqlite3 and php-sqlite3 installed

* clone the repo
* cd pizza
* composer install
* cp .env.testing .env
* touch database/pizza.sqlite
* php artisan migrate
* php artisan db:seed
* php artisan serve

and the application should be available at http://127.0.0.1:8000

---

## Documentation

### API


### web client

For convenience in testing I provided a small client built with livewire. it makes rest calls to the API endpoints and goes through the entire feature list.

Any question, let me know
