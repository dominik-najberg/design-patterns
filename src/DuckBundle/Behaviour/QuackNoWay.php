<?php

namespace DuckBundle\Behaviour;


class QuackNoWay implements QuackBehaviour
{
    public function quack()
    {
        return "<< silence >>";
    }

}