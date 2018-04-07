<?php

namespace Tests\FactoryMethod\Unit;

use App\FactoryMethod\Pizza\CheesePizza;
use App\FactoryMethod\Pizza\GreekPizza;
use App\FactoryMethod\Pizza\PepperoniPizza;
use App\FactoryMethod\NYStylePizzaStore;
use Tests\TestCase;

class PizzaStoreTest extends TestCase
{
    /** @test */
    public function can_order_new_york_pizza_from_store()
    {
        $pizzaStore = new NYStylePizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }
}
