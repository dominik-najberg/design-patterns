<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 19:39
 */

namespace FactoryBundle\SimpleFactory;


class CheesePizza extends Pizza
{
    /**
     * CheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = "Delicious Cheese Pizza";

        parent::__construct();
    }
}