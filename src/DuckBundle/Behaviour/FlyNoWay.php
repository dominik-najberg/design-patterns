<?php

namespace DuckBundle\Behaviour;


class FlyNoWay implements FlyBehaviour
{
    public function fly()
    {
        return "I am not flying. I can't. Damn it.";
    }

}