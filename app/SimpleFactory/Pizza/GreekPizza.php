<?php

namespace App\SimpleFactory\Pizza;

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
        "Cutting the greek pizza\n";
    }

    public function box()
    {
        "Boxing the greek pizza\n";
    }
}
