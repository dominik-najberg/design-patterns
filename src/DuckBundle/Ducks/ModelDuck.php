<?php

namespace DuckBundle\Ducks;

use DuckBundle\Behaviour\FlyNoWay;
use DuckBundle\Behaviour\QuackNoWay;
use DuckBundle\Duck;

class ModelDuck extends Duck
{
    /**
     * ModelDuck constructor.
     */
    public function __construct()
    {
        $this->setFlyBehaviour(new FlyNoWay());
        $this->setQuackBehaviour(new QuackNoWay());
    }

    public function display()
    {
        return "Well. I am a model duck.";
    }


}