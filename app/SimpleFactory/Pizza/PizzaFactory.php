<?php

namespace App\SimpleFactory\Pizza;

class PizzaFactory
{
    public function createPizza($type)
    {
        if ($type === 'cheese') {
            $pizza = new CheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new GreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza();
        }

        return $pizza;
    }
}
