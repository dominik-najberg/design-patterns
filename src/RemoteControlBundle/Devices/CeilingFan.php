<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:57
 */

namespace RemoteControlBundle\Devices;

/**
 * Class CeilingFan
 *
 * @package RemoteControlBundle\Devices
 */
class CeilingFan
{
    const HIGH   = 3;
    const MEDIUM = 2;
    const LOW    = 1;
    const OFF    = 0;

    /**
     * @var string
     */
    private $location = "Garage Fan";

    /**
     * @var int
     */
    private $speed = self::OFF;

    /**
     * CeilingFan constructor
     *
     * @param string $location
     */
    public function __construct(string $location)
    {
        $this->location = $location;
        $this->off();
    }

    public function on(): void
    {
        $this->low();
    }

    public function off(): void
    {
        $this->speed = self::OFF;
    }

    public function high()
    {
        $this->speed = self::HIGH;
    }

    public function medium()
    {
        $this->speed = self::MEDIUM;
    }

    public function low()
    {
        $this->speed = self::LOW;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->speed > 0;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }


}