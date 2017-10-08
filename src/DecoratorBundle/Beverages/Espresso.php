<?php

namespace DecoratorBundle\Beverages;

class Espresso extends Beverage
{
    /**
     * Espresso constructor.
     */
    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function cost(): float
    {
        return parent::cost()+1.99;
    }
}