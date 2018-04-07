<?php

namespace Tests\SimpleFactory\Unit;

use App\SimpleFactory\Pizza\CheesePizza;
use App\SimpleFactory\Pizza\GreekPizza;
use App\SimpleFactory\Pizza\PepperoniPizza;
use App\SimpleFactory\PizzaStore;
use Tests\TestCase;

class PizzaStoreTest extends TestCase
{
    /** @test */
    public function can_order_cheese_pizza_from_store()
    {
        $pizzaStore = new PizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }

    /** @test */
    public function can_order_greek_pizza_from_store()
    {
        $pizzaStore = new PizzaStore();

        $pizza = $pizzaStore->orderPizza('greek');

        $this->assertInstanceOf(GreekPizza::class, $pizza);
    }

    /** @test */
    public function can_order_pepperoni_pizza_from_store()
    {
        $pizzaStore = new PizzaStore();

        $pizza = $pizzaStore->orderPizza('pepperoni');

        $this->assertInstanceOf(PepperoniPizza::class, $pizza);
    }
}
