<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 15:01
 */

namespace RemoteControlBundle;


use RemoteControlBundle\Commands\Command;

class SimpleRemoteControl
{
    /**
     * @var Command
     */
    private $slot;

    /**
     * SimpleRemoteControl constructor
     */
    public function __construct()
    {
    }

    /**
     * @param Command $command
     *
     */
    public function setCommand(Command $command)
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}