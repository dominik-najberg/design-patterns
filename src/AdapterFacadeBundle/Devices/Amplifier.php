<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 15:08
 */

namespace AdapterFacadeBundle\Devices;


class Amplifier
{
    const CD  = 0;
    const DVD = 1;
    const TV  = 2;

    const NORMAL_SOUND = 0;
    const SURROUND_SOUND = 1;

    /**
     * @var bool
     */
    private $on = false;

    /**
     * @var int
     */
    private $mode = self::CD;

    /**
     * @var int
     */
    private $volume = 5;

    public function on()
    {
        $this->on = true;
    }

    public function off()
    {
        $this->on = false;
    }

    public function setSurroundSound()
    {
        $this->mode = self::SURROUND_SOUND;
    }

    public function setVolume(int $volume)
    {
        $this->volume = $volume;
    }

    public function setDvd()
    {
        $this->mode = self::DVD;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    /**
     * @return int
     */
    public function getMode(): int
    {
        return $this->mode;
    }

    /**
     * @return int
     */
    public function getVolume(): int
    {
        return $this->volume;
    }
}