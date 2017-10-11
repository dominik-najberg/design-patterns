<?php

namespace FactoryBundle\AbstractFactory\PizzaStores;


use FactoryBundle\AbstractFactory\Ingredients\ChicagoPizzaIngredientFactory;
use FactoryBundle\AbstractFactory\Pizzas\CheesePizza;
use FactoryBundle\AbstractFactory\Pizzas\ClamPizza;
use FactoryBundle\AbstractFactory\Pizzas\PepperoniPizza;
use FactoryBundle\AbstractFactory\Pizzas\Pizza;
use FactoryBundle\AbstractFactory\Pizzas\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("Chicago Style Cheese Pizza");
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName("Chicago Style Pepperoni Pizza");
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName("Chicago Style Clam Pizza");
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName("Chicago Style Veggie Pizza");
                break;
            default:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("Chicago Style Cheese Pizza");
                break;
        }

        return $pizza;
    }
}