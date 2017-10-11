<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 19:39
 */

namespace FactoryBundle\SimpleFactory;


class VeggiePizza extends Pizza
{
    /**
     * VeggiePizza constructor.
     */
    public function __construct()
    {
        $this->name = "Veggie Where-Is-The-Meat Pizza";

        parent::__construct();
    }
}