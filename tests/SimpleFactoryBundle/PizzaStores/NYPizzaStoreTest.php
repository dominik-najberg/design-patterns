<?php

namespace SimpleFactoryBundle\Tests\PizzaStores;

use PHPUnit\Framework\TestCase;
use SimpleFactoryBundle\PizzaStores\NYPizzaStore;

class NYPizzaStoreTest extends TestCase
{

    public function testNYPizzaStore()
    {
        $pizzaStore = new NYPizzaStore();

        $pizza = $pizzaStore->orderPizza('veggie');

        $this->assertEquals('SimpleFactoryBundle\Pizzas\NY\NYStyleVeggiePizza', get_class($pizza));

    }
}
