<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:55
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Devices\TV;

class TvOffCommand implements Command
{
    /**
     * @var TV
     */
    private $tv;

    /**
     * TvOffCommand constructor
     *
     * @param TV $tv
     */
    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void
    {
        $this->tv->off();
    }

    public function undo(): void
    {
        $this->tv->on();
    }
}