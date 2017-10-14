<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 14:57
 */

namespace RemoteControlBundle\Devices;

/**
 * Class Light
 *
 * @package RemoteControlBundle
 */
class Light
{
    /**
     * @var bool
     */
    private $on = false;

    /**
     * Light constructor.
     */
    public function __construct()
    {
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