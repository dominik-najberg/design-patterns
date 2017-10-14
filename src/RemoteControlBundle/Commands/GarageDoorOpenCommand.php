<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 15:34
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Devices\GarageDoor;

class GarageDoorOpenCommand implements Command
{
    /**
     * @var GarageDoor
     */
    private $garageDoor;

    /**
     * GarageDoorOpenCommand constructor.
     *
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }

    public function execute(): void
    {
        $this->garageDoor->lightOn(); // we've got a fancy garage door!
        $this->garageDoor->up();
    }

}