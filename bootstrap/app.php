<?php

function main($arg)
{
    $arg();
}

function simpleFactory()
{
    echo "Simple Factory Idiom\n";
    echo "----------------------\n";
    (new \App\SimpleFactory\Main())->run();
}

function factoryMethod()
{
    echo "Factory Method Pattern\n";
    echo "----------------------\n";
    (new \App\FactoryMethod\Main())->run();
}

function abstractFactory()
{
    echo 'Abstract Factory Pattern';
}
