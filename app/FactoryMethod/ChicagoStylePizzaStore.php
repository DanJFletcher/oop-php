<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Pizza\GreekPizza;
use App\FactoryMethod\Pizza\CheesePizza;
use App\FactoryMethod\Pizza\PepperoniPizza;
use App\FactoryMethod\Pizza\ChicagoStyleCheesePizza;

class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        echo "Creating Chicago Style Pizza...\n";

        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new GreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza();
        }

        return $pizza;
    }
}
