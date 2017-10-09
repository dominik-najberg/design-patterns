<?php

namespace SimpleFactoryBundle\PizzaStores;


use SimpleFactoryBundle\Pizzas\NY\NYStyleCheesePizza;
use SimpleFactoryBundle\Pizzas\NY\NYStyleClamPizza;
use SimpleFactoryBundle\Pizzas\NY\NYStylePepperoniPizza;
use SimpleFactoryBundle\Pizzas\NY\NYStyleVeggiePizza;
use SimpleFactoryBundle\Pizzas\Pizza;

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