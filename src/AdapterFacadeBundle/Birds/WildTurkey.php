<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 21:10
 */

namespace AdapterFacadeBundle\Birds;


class WildTurkey implements TurkeyInterface
{
    public function gobble(): string
    {
        return "Gobble. Gobble.";
    }

    public function fly(): string
    {
        return "I'm flying short distance.";
    }

}