<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 15:08
 */

namespace AdapterFacadeBundle\Devices;


class DvdPlayer
{
    /**
     * @var bool
     */
    private $trayOpen = false;

    /**
     * @var bool
     */
    private $playing = false;

    /**
     * @var string
     */
    private $title = "";

    /**
     * @var bool
     */
    private $on = false;

    public function on()
    {
        $this->on = true;
    }

    public function off()
    {
        $this->on = false;
    }

    public function play()
    {
        $this->trayOpen = false;

        if (!$this->title) {
            throw new \Exception('No DVD inside');
        }

        $this->playing = true;
    }

    public function stop()
    {
        $this->playing = false;
    }

    public function eject()
    {
        $this->trayOpen = true;
        $this->title = '';
    }

    public function insert(string $title)
    {
        $this->title = $title;
    }
}