<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:55
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Devices\CeilingFan;

class CeilingFanOnCommand implements Command
{
    /**
     * @var CeilingFan
     */
    private $fan;

    /**
     * CeilingFanOnCommand constructor
     *
     * @param CeilingFan $ceilingFan
     */
    public function __construct(CeilingFan $ceilingFan)
    {
        $this->fan = $ceilingFan;
    }

    public function execute(): void
    {
        $this->fan->on();
    }

    public function undo(): void
    {
        $this->fan->off();
    }
}