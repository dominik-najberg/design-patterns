<?php

namespace DecoratorBundle\Condiment;


use DecoratorBundle\CondimentDecorator;

class Mocha extends CondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Mocha";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .20;
    }

}