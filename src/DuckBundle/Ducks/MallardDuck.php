<?php

namespace DuckBundle\Ducks;

use DuckBundle\Behaviour\FlyWithWings;
use DuckBundle\Behaviour\Quack;
use DuckBundle\Duck;

class MallardDuck extends Duck
{
    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        $this->setQuackBehaviour(new Quack());
        $this->setFlyBehaviour(new FlyWithWings());
    }

    public function display()
    {
        return "I am a Mallard Duck. Look. I am beautiful!";
    }

}