<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 21:53
 */

namespace FactoryBundle\Tests\AbstractFactory\PizzaStores;

use FactoryBundle\AbstractFactory\Pizzas\Pizza;
use FactoryBundle\AbstractFactory\PizzaStores\ChicagoPizzaStore;
use FactoryBundle\AbstractFactory\PizzaStores\NYPizzaStore;
use PHPUnit\Framework\TestCase;

class ChicagoPizzaStoreTest extends TestCase
{

    public function testChicagoPizzaStore()
    {
        $pizzaStore = new NYPizzaStore();

        $pizza = $pizzaStore->orderPizza('cheese');

        $this->assertEquals('New York Style Cheese Pizza', $pizza->getName());
        $this->assertInstanceOf(Pizza::class, $pizza);
    }
}
