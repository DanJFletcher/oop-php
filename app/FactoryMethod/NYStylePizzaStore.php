<?php

namespace App\FactoryMethod;

use App\FactoryMethod\Pizza\Pizza;
use App\FactoryMethod\Pizza\GreekPizza;
use App\FactoryMethod\Pizza\PepperoniPizza;
use App\FactoryMethod\Pizza\NYStyleCheesePizza;

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza(String $type) : Pizza
    {
        echo "Creating New York Style Pizza...\n";

        if ($type === 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new GreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza();
        }

        return $pizza;
    }
}
