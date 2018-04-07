<?php

namespace Tests\FactoryMethod\Unit;

use Tests\TestCase;
use App\FactoryMethod\Pizza\GreekPizza;
use App\FactoryMethod\NYStylePizzaStore;
use App\FactoryMethod\Pizza\CheesePizza;
use App\FactoryMethod\Pizza\PepperoniPizza;
use App\FactoryMethod\ChicagoStylePizzaStore;

class PizzaStoreTest extends TestCase
{
    /** @test */
    public function can_order_new_york_pizza_from_store()
    {
        $pizzaStore = new NYStylePizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }

    /** @test */
    public function can_order_chicago_pizza_from_store()
    {
        $pizzaStore = new ChicagoStylePizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }
}
