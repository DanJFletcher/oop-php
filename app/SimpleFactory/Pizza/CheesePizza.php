<?php

namespace App\SimpleFactory\Pizza;

class CheesePizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing the cheese pizza\n";
    }

    public function bake()
    {
        echo "Baking the cheese pizza\n";
    }

    public function cut()
    {
        "Cutting the cheese pizza\n";
    }

    public function box()
    {
        "Boxing the cheese pizza\n";
    }
}
