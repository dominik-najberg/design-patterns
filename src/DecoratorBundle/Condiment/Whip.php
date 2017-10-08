<?php

namespace DecoratorBundle\Condiment;


use DecoratorBundle\CondimentDecorator;

class Whip extends CondimentDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .30;
    }

}