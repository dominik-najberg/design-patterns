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


    /**
     * ChicagoStyleCheesePizza constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->name  = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->souce = "Plum Tomato Sauce";

        $this->toppings->add("Shredded Mozarella Cheese");
    }

    public function cut()
    {
        return "Cutting the pizza into square slices.";
    }

}