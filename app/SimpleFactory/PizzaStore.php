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
        echo "ordering a {$type} pizza...\n";

        $pizza = (new PizzaFactory())->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
