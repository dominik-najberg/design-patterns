<?php

namespace SimpleFactoryBundle\Tests\PizzaStores;

use PHPUnit\Framework\TestCase;
use SimpleFactoryBundle\PizzaStores\ChicagoPizzaStore;
use SimpleFactoryBundle\PizzaStores\NYPizzaStore;

class NYPizzaStoreTest extends TestCase
{

    public function testNYPizzaStore()
    {
        $pizzaStore = new NYPizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf('SimpleFactoryBundle\Pizzas\NY\NYStyleCheesePizza', $pizza);
        $this->assertEquals('NY Style Sauce and Cheese Pizza', $pizza->getName());
    }

    public function testChicagoPizzaStore()
    {
        $pizzaStore = new ChicagoPizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf('SimpleFactoryBundle\Pizzas\Chicago\ChicagoStyleCheesePizza', $pizza);
        $this->assertEquals('Chicago Style Deep Dish Cheese Pizza', $pizza->getName());
    }


}
