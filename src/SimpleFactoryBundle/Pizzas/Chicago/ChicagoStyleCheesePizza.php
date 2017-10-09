<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 09.10.17
 * Time: 20:11
 */

namespace SimpleFactoryBundle\Pizzas\Chicago;


use SimpleFactoryBundle\Pizzas\Pizza;

class ChicagoStyleCheesePizza extends Pizza
{
    public function bake()
    {
        return "This is baked with little Chicago at heart.";
    }

}