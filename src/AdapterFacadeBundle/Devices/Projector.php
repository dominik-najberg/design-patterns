<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 15:08
 */

namespace AdapterFacadeBundle\Devices;


class Projector
{
    const NORMAL_SCREEN = 0;
    const WIDE_SCREEN   = 1;

    private $on = false;
    private $mode = self::NORMAL_SCREEN;

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    public function on()
    {
        $this->on = true;
    }

    public function off()
    {
        $this->on = false;
    }

    public function wideScreenMode()
    {
        $this->mode = self::WIDE_SCREEN;
    }

    public function normalScreenMode()
    {
        $this->mode = self::NORMAL_SCREEN;
    }
}