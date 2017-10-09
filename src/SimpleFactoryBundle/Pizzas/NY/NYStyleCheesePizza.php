<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 09.10.17
 * Time: 20:09
 */

namespace SimpleFactoryBundle\Pizzas\NY;


use SimpleFactoryBundle\Pizzas\Pizza;

class NYStyleCheesePizza extends Pizza
{
    public function bake()
    {
        return "This cheese smells like New York!";
    }

}