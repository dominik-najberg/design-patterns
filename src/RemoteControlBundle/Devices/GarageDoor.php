<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 15:25
 */

namespace RemoteControlBundle\Devices;


class GarageDoor
{
    /**
     * @var TV
     */
    private $light;

    /**
     * @var bool
     */
    private $up = false;

    /**
     * @var bool
     */
    private $down = true;

    /**
     * GarageDoor constructor.
     */
    public function __construct()
    {
        $this->light = new Light('Garage Light');
    }

    public function up()
    {
        $this->up = true;
        $this->down = false;
    }

    public function down()
    {
        $this->up = false;
        $this->down = true;
    }

    public function stop()
    {
        // stop the door
    }

    public function lightOn()
    {
        $this->light->on();
    }

    public function lightOff()
    {
        $this->light->off();
    }

    /**
     * @return bool
     */
    public function isLightOn(): bool
    {
        return $this->light->isOn();
    }

    /**
     * @return bool
     */
    public function isUp(): bool
    {
        return $this->up;
    }

    /**
     * @return bool
     */
    public function isDown(): bool
    {
        return $this->down;
    }


}