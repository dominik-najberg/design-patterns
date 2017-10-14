<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 16:44
 */

namespace RemoteControlBundle\Commands;

class NoCommand implements Command
{
    public function execute(): void
    {
        // null object does nothing
    }

    public function undo(): void
    {
        // null object does nothing
    }

}