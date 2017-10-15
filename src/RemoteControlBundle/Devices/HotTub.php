<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 18:00
 */

namespace RemoteControlBundle\Devices;


class HotTub
{
    /**
     * @var bool
     */
    private $on = false;

    /**
     * @var bool
     */
    private $circulation = false;

    /**
     * @var bool
     */
    private $jets = false;

    /**
     * @var int
     */
    private $temperature = 0;


    public function on()
    {
        $this->on = true;
    }

    public function off()
    {
        $this->on = false;
    }

    public function circulate()
    {
        $this->circulation = !$this->circulation;
    }

    public function jetsOn()
    {
        $this->jets = true;
    }

    public function jestOff()
    {
        $this->jets = false;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature(int $temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    /**
     * @return bool
     */
    public function isCirculation(): bool
    {
        return $this->circulation;
    }

    /**
     * @return bool
     */
    public function isJets(): bool
    {
        return $this->jets;
    }

    /**
     * @return int
     */
    public function getTemperature(): int
    {
        return $this->temperature;
    }



}