<?php

namespace App\FactoryMethod\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing the NY style cheese pizza\n";
    }

    public function bake()
    {
        echo "Baking the NY style cheese pizza\n";
    }

    public function cut()
    {
        echo "Cutting the NY style cheese pizza\n";
    }

    public function box()
    {
        echo "Boxing the NY style cheese pizza\n";
    }
}
