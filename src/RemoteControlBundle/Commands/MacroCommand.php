<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 18:44
 */

namespace RemoteControlBundle\Commands;


class MacroCommand implements Command
{
    /**
     * @var Command[]
     */
    private $commands;

    /**
     * MacroCommand constructor.
     *
     * @param Command[] $commands
     */
    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo(): void
    {
        for($i = count($this->commands)-1; $i >= 0; $i--) {
            $this->commands[$i]->undo();
        }
    }

}