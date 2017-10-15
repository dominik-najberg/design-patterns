<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 21:09
 */

namespace AdapterFacadeBundle\Birds;


class MallardDuck implements DuckInterface
{
    public function quack(): string
    {
        return "Quack";
    }

    public function fly(): string
    {
        return "I am flying like a proper bird.";
    }

}