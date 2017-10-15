<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:55
 */

namespace RemoteControlBundle\Commands;


use RemoteControlBundle\Devices\HotTub;

class HotTubOnCommand implements Command
{
    /**
     * @var HotTub
     */
    private $hotTub;

    /**
     * HotTubOnCommand constructor
     *
     * @param HotTub $hotTub
     */
    public function __construct(HotTub $hotTub)
    {
        $this->hotTub = $hotTub;
    }

    public function execute(): void
    {
        $this->hotTub->on();
    }

    public function undo(): void
    {
        $this->hotTub->off();
    }
}