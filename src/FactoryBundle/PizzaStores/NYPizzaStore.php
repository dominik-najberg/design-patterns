<?php

namespace FactoryBundle\PizzaStores;


use FactoryBundle\Pizzas\NY\NYStyleCheesePizza;
use FactoryBundle\Pizzas\NY\NYStyleClamPizza;
use FactoryBundle\Pizzas\NY\NYStylePepperoniPizza;
use FactoryBundle\Pizzas\NY\NYStyleVeggiePizza;
use FactoryBundle\Pizzas\Pizza;

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