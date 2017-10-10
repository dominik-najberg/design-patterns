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
    /**
     * NYStyleCheesePizza constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->name  = "NY Style Sauce and Cheese Pizza";
        $this->dough = "Thin Crust Dough";
        $this->souce = "Marinara Sauce";

        $this->toppings->add("Grated Reggiano Cheese");
    }
}