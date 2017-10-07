<?php

namespace DuckBundle\Ducks;


use DuckBundle\Behaviour\FlyNoWay;
use DuckBundle\Behaviour\Squeak;
use DuckBundle\Duck;

class YellowDuck extends Duck
{
    /**
     * YellowDuck constructor.
     */
    public function __construct()
    {
        $this->setQuackBehaviour(new Squeak());
        $this->setFlyBehaviour(new FlyNoWay());
    }

    public function display()
    {
        return "Do you want to squeeze me?";
    }


}