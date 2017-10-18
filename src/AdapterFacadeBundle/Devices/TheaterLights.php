<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 15:09
 */

namespace AdapterFacadeBundle\Devices;


class TheaterLights
{
    /**
     * @var int light level (0 means off, 20 mean max)
     */
    private $level = 0;

    public function dim(int $level)
    {
        $this->level = $level;
    }

    public function on()
    {
        $this->level = 20;
    }

    public function off()
    {
        $this->level = 0;
    }

    public function isOn()
    {
        return $this->level > 0;
    }
}