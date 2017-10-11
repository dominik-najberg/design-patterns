<?php

namespace FactoryBundle\FactoryMethod\PizzaStores;


use FactoryBundle\FactoryMethod\Pizzas\NY\NYStyleCheesePizza;
use FactoryBundle\FactoryMethod\Pizzas\NY\NYStyleClamPizza;
use FactoryBundle\FactoryMethod\Pizzas\NY\NYStylePepperoniPizza;
use FactoryBundle\FactoryMethod\Pizzas\NY\NYStyleVeggiePizza;
use FactoryBundle\FactoryMethod\Pizzas\Pizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        switch ($type){
            case 'cheese':
                $pizza = new NYStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new NYStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new NYStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new NYStyleVeggiePizza();
                break;
            default:
                $pizza = new NYStyleCheesePizza();
                break;
        }

        return $pizza;
    }
}