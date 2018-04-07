<?php

use App\SimpleFactory\Main;

function main($arg)
{
    $arg();
}

function simpleFactory()
{
    echo "Simple Factory Idiom\n";
    (new Main())->run();
}

function factoryMethod()
{
    echo 'Factory Method Pattern';
}

function abstractFactory()
{
    echo 'Abstract Factory Pattern';
}
