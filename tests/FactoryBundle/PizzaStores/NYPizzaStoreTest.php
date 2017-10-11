<?php

namespace FactoryBundle\Tests\PizzaStores;

use FactoryBundle\FactoryMethod\Pizzas\Chicago\ChicagoStyleCheesePizza;
use FactoryBundle\FactoryMethod\Pizzas\NY\NYStyleCheesePizza;
use FactoryBundle\FactoryMethod\PizzaStores\ChicagoPizzaStore;
use FactoryBundle\FactoryMethod\PizzaStores\NYPizzaStore;
use PHPUnit\Framework\TestCase;

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
