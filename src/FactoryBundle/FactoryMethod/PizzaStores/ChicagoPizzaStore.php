<?php

namespace FactoryBundle\FactoryMethod\PizzaStores;


use FactoryBundle\FactoryMethod\Pizzas\Chicago\ChicagoStyleCheesePizza;
use FactoryBundle\FactoryMethod\Pizzas\Chicago\ChicagoStyleClamPizza;
use FactoryBundle\FactoryMethod\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use FactoryBundle\FactoryMethod\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use FactoryBundle\FactoryMethod\Pizzas\Pizza;

class ChicagoPizzaStore extends PizzaStore
{
    function createPizza(string $type): Pizza
    {
        switch ($type){
            case 'cheese':
                $pizza = new ChicagoStyleCheesePizza();
                break;
            case 'pepperoni':
                $pizza = new ChicagoStylePepperoniPizza();
                break;
            case 'clam':
                $pizza = new ChicagoStyleClamPizza();
                break;
            case 'veggie':
                $pizza = new ChicagoStyleVeggiePizza();
                break;
            default:
                $pizza = new ChicagoStyleCheesePizza();
                break;
        }

        return $pizza;
    }
}