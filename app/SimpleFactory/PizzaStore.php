<?php

namespace App\SimpleFactory;

use App\SimpleFactory\Pizza\GreekPizza;
use App\SimpleFactory\Pizza\CheesePizza;
use App\SimpleFactory\Pizza\PizzaFactory;
use App\SimpleFactory\Pizza\PepperoniPizza;

class PizzaStore
{
    public function orderPizza($type)
    {
        echo "ordering a pizza...\n";

        return (new PizzaFactory())->createPizza($type);
    }
}
