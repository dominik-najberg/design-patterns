<?php

namespace DuckBundle\Behaviour;


class Quack implements QuackBehaviour
{
    public function quack()
    {
        return "Quack, quack. Can you do that?";
    }

}