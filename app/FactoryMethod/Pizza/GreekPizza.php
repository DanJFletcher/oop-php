<?php

namespace App\FactoryMethod\Pizza;

class GreekPizza extends Pizza
{
    public function prepare()
    {
        echo "Preparing the greek pizza\n";
    }

    public function bake()
    {
        echo "Baking the greek pizza\n";
    }

    public function cut()
    {
        echo "Cutting the greek pizza\n";
    }

    public function box()
    {
        echo "Boxing the greek pizza\n";
    }
}
