<?php

namespace App\SimpleFactory\Pizza;

class PepperoniPizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing the pepperoni pizza\n";
    }

    public function bake()
    {
        echo "Baking the pepperoni pizza\n";
    }

    public function cut()
    {
        echo "Cutting the pepperoni pizza\n";
    }

    public function box()
    {
        echo "Boxing the pepperoni pizza\n";
    }
}
