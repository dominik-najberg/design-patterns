<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 18:15
 */

namespace RemoteControlBundle\Devices;


class FancyLight
{
    /**
     * @var bool
     */
    private $on = false;

    /**
     * @var bool
     */
    private $dimmed = false;

    /**
     * @var string
     */
    private $name = "Black Fancy Light";


    /**
     * FancyLight constructor
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

    public function dim()
    {
        $this->dimmed = !$this->dimmed;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }
}