<?php

namespace DuckBundle\Behaviour;


class Squeak implements QuackBehaviour
{
    public function quack()
    {
        return "I can squeak. Yuk! Squeak, squeak...";
    }

}