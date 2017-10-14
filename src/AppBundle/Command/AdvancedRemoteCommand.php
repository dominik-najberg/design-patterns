<?php

namespace AppBundle\Command;

use RemoteControlBundle\AdvancedRemoteControl;
use RemoteControlBundle\Commands\LightOffCommand;
use RemoteControlBundle\Commands\LightOnCommand;
use RemoteControlBundle\Devices\Light;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AdvancedRemoteCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('app:advanced_remote_command')
            ->setDescription('I wanted to play with my remote.');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $advRemote = new AdvancedRemoteControl();
        $light = new Light('Wicked Light');
        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);

        $advRemote->setCommand(0, $lightOn, $lightOff);

        $output->write((string)$advRemote);
    }
}
