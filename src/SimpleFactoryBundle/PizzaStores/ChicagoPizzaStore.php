<?php

namespace SimpleFactoryBundle\PizzaStores;


use SimpleFactoryBundle\Pizzas\Chicago\ChicagoStyleCheesePizza;
use SimpleFactoryBundle\Pizzas\Chicago\ChicagoStyleClamPizza;
use SimpleFactoryBundle\Pizzas\Chicago\ChicagoStylePepperoniPizza;
use SimpleFactoryBundle\Pizzas\Chicago\ChicagoStyleVeggiePizza;
use SimpleFactoryBundle\Pizzas\Pizza;

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