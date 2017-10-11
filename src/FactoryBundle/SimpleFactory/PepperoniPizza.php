<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 19:39
 */

namespace FactoryBundle\FactoryMethod\SimpleFactory;


class PepperoniPizza extends Pizza
{
    /**
     * PepperoniPizza constructor.
     */
    public function __construct()
    {
        $this->name = "Legendary Pepperoni Pizza";

        parent::__construct();
    }
}