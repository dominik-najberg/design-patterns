<?php

namespace SimpleFactoryBundle\Pizzas;


abstract class Pizza
{
    public function prepare()
    {
        return "Let's prepare pizza";
    }

    public function bake()
    {
        return "Now we bake it.";
    }

    public function cut()
    {
        return "Please, cut it into slices.";
    }

    public function box()
    {
        return "Where is the box?";
    }
}