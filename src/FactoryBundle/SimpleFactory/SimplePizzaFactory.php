<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 19:35
 */

namespace FactoryBundle\SimpleFactory;


class SimplePizzaFactory
{
    public function createPizza(string $type): Pizza
    {
        $pizza = null;

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;
            case 'clam':
                $pizza = new ClamPizza();
                break;
            case 'veggie':
                $pizza = new VeggiePizza();
                break;
            default:
                $pizza = new CheesePizza();
                break;
        }

        return $pizza;
    }
}