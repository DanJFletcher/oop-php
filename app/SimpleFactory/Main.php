<?php

namespace App\SimpleFactory;

use Pizza\Pizza;

class Main
{
    public function run()
    {
        $pizzaStore = new PizzaStore();

        $pizzaStore->orderPizza('cheese');
    }
}
