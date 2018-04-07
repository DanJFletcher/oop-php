<?php

namespace Tests\SimpleFactory\Unit;

use Tests\TestCase;
use App\SimpleFactory\Pizza\CheesePizza;
use App\SimpleFactory\Pizza\PizzaFactory;

class PizzaFactoryTest extends TestCase
{
    /** @test */
    public function pizza_factory_can_return_pizzas()
    {
        $pizzaFactory = new PizzaFactory();

        $pizza = $pizzaFactory->createPizza('cheese');

        $this->assertInstanceOf(CheesePizza::class, $pizza);
    }
}
