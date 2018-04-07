<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Pizza\GreekPizza;
use App\FactoryMethod\Pizza\CheesePizza;
use App\FactoryMethod\Pizza\PepperoniPizza;

abstract class PizzaStore
{
    abstract protected function createPizza($type);

    public function orderPizza($type)
    {
        echo "ordering a {$type} pizza...\n";

        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
