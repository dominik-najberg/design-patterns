<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:49
 */

namespace RemoteControlBundle\Commands;


interface Command
{
    public function execute(): void;
    public function undo(): void;
}