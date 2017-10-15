<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 19:06
 */

namespace RemoteControlBundle\Devices;

/**
 * Class Stereo
 * Good retro stereo - you can set options even if it's off
 *
 * @package RemoteControlBundle\Devices
 */
class Stereo
{
    /**
     * @var bool
     */
    private $on = false;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var int
     */
    private $volume;

    /**
     * @var string
     */
    private $name = "Broken Stereo";

    /**
     * Stereo constructor
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function on()
    {
        $this->on = true;
    }

    public function off()
    {
        $this->on = false;
    }

    public function setCd()
    {
        $this->mode = 'CD';
    }

    public function setDvd()
    {
        $this->mode = 'DVD';
    }

    public function setRadio()
    {
        $this->mode = 'Radio';
    }

    public function setVolume(int $vol)
    {
        if ($vol > 10) {
            $vol = 10;
        }elseif ($vol < 0) {
            $vol = 0;
        }

        $this->volume = abs($vol);
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    /**
     * @return string
     */
    public function getMode(): string
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