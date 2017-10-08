<?php

namespace DecoratorBundle;


use DecoratorBundle\Beverages\Beverage;

abstract class CondimentDecorator extends Beverage
{
    /**
     * @var CondimentDecorator
     */
    protected $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}