<?php

namespace App\FactoryMethod\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing the Chicago style cheese pizza\n";
    }

    public function bake()
    {
        echo "Baking the Chicago style cheese pizza\n";
    }

    public function cut()
    {
        echo "Cutting the Chicago style cheese pizza\n";
    }

    public function box()
    {
        echo "Boxing the Chicago style cheese pizza\n";
    }
}
