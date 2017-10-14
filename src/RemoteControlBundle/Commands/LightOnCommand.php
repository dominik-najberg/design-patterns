<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:55
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Light;

class LightOnCommand implements Command
{
    /**
     * @var Light
     */
    private $light;

    /**
     * LightOnCommand constructor
     *
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }
}