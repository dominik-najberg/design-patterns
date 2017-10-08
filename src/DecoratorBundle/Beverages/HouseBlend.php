<?php

namespace DecoratorBundle\Beverages;

class HouseBlend extends Beverage
{
    /**
     * HouseBlend constructor.
     */
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost(): float
    {
        return .89;
    }
}