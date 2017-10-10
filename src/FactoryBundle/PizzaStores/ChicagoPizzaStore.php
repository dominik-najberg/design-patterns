<?php

namespace FactoryBundle\PizzaStores;


use FactoryBundle\Pizzas\Chicago\ChicagoStyleCheesePizza;
use FactoryBundle\Pizzas\Chicago\ChicagoStyleClamPizza;
use FactoryBundle\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use FactoryBundle\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use FactoryBundle\Pizzas\Pizza;

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