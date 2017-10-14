<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 19:15
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Devices\Stereo;

class StereoOnWithCDCommand implements Command
{
    /**
     * @var Stereo
     */
    private $stereo;

    /**
     * StereoOnWithCDCommand constructor
     *
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCd();
    }
}