<?php

namespace App\AbstractFactory;

use Pizza\Pizza;
use App\FactoryMethod\NYStylePizzaStore;

class Main
{
    public function run()
    {
        $pizzaStore = new NYStylePizzaStore();

        $pizzaStore->orderPizza('cheese');
    }
}
