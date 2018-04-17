<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Pizza\Pizza;
use App\FactoryMethod\Pizza\GreekPizza;
use App\FactoryMethod\Pizza\CheesePizza;
use App\FactoryMethod\Pizza\PepperoniPizza;

abstract class PizzaStore
{
    abstract protected function createPizza(String $type) : Pizza;

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
