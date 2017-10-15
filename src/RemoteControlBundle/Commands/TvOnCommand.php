<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:55
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Devices\TV;

class TvOnCommand implements Command
{
    /**
     * @var TV
     */
    private $tv;

    /**
     * TvOnCommand constructor
     *
     * @param TV $tv
     */
    public function __construct(TV $tv)
    {
        $this->tv = $tv;
    }

    public function execute(): void
    {
        $this->tv->on();
    }

    public function undo(): void
    {
        $this->tv->off();
    }
}