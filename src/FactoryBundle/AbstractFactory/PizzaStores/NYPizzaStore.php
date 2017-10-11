<?php

namespace FactoryBundle\AbstractFactory\PizzaStores;


use FactoryBundle\AbstractFactory\Ingredients\NYPizzaIngredientFactory;
use FactoryBundle\AbstractFactory\Pizzas\CheesePizza;
use FactoryBundle\AbstractFactory\Pizzas\ClamPizza;
use FactoryBundle\AbstractFactory\Pizzas\PepperoniPizza;
use FactoryBundle\AbstractFactory\Pizzas\Pizza;
use FactoryBundle\AbstractFactory\Pizzas\VeggiePizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($type){
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("New York Style Cheese Pizza");
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza($ingredientFactory);
                $pizza->setName("New York Style Pepperoni Pizza");
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName("New York Style Clam Pizza");
                break;
            case 'veggie':
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName("New York Style Veggie Pizza");
                break;
            default:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName("New York Style Cheese Pizza");
                break;
        }

        return $pizza;
    }
}