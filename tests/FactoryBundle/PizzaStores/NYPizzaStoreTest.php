<?php

namespace FactoryBundle\Tests\PizzaStores;

use PHPUnit\Framework\TestCase;
use FactoryBundle\Pizzas\Chicago\ChicagoStyleCheesePizza;
use FactoryBundle\Pizzas\NY\NYStyleCheesePizza;
use FactoryBundle\PizzaStores\ChicagoPizzaStore;
use FactoryBundle\PizzaStores\NYPizzaStore;

class NYPizzaStoreTest extends TestCase
{

    public function testNYPizzaStore()
    {
        $pizzaStore = new NYPizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf(NYStyleCheesePizza::class, $pizza);
        $this->assertEquals('NY Style Sauce and Cheese Pizza', $pizza->getName());
    }

    public function testChicagoPizzaStore()
    {
        $pizzaStore = new ChicagoPizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertInstanceOf(ChicagoStyleCheesePizza::class, $pizza);
        $this->assertEquals('Chicago Style Deep Dish Cheese Pizza', $pizza->getName());
    }


}
