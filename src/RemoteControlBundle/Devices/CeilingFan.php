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
    /**
     * @var bool
     */
    private $on = false;

    /**
     * @var string
     */
    private $name = "Garage Fan";

    /**
     * CeilingFan constructor
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function on(): void
    {
        $this->on = true;
    }

    public function off(): void
    {
        $this->on = false;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }
}