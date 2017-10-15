<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 18:10
 */

namespace RemoteControlBundle\Devices;


class TV
{
    /**
     * @var bool
     */
    private $on = false;

    /**
     * @var int
     */
    private $inputChannel = 1;

    /**
     * @var int
     */
    private $volume = 5;

    /**
     * @var string
     */
    private $location = 'On the floor';

    /**
     * TV constructor
     *
     * @param string $location
     */
    public function __construct($location)
    {
        $this->location = $location;
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
     * @param int $inputChannel
     */
    public function setInputChannel(int $inputChannel)
    {
        $this->inputChannel = $inputChannel;
    }

    /**
     * @param int $volume
     */
    public function setVolume(int $volume)
    {
        $this->volume = $volume;
    }


}