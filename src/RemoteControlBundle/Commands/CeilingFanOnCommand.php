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
     * @var int
     */
    private $prevSpeed;

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
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->on();
    }

    public function undo(): void
    {
        if ($this->prevSpeed == CeilingFan::HIGH) {
            $this->fan->high();
        } elseif ($this->prevSpeed == CeilingFan::MEDIUM) {
            $this->fan->medium();
        } elseif ($this->prevSpeed == CeilingFan::LOW) {
            $this->fan->low();
        } else {
            $this->fan->off();
        }
    }
}