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
        "Cutting the pepperoni pizza\n";
    }

    public function box()
    {
        "Boxing the pepperoni pizza\n";
    }
}
