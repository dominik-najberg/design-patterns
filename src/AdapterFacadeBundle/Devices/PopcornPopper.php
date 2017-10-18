<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 15:09
 */

namespace AdapterFacadeBundle\Devices;


class PopcornPopper
{
    /**
     * @var bool
     */
    private $on = false;

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

    /**
     * Must be ON before popping
     *
     * @return string
     *
     * @throws \Exception
     */
    public function pop(): string
    {
        if ($this->isOn()) {
            return "Started popping. Pop pop pop!";
        } else {
            throw new \Exception("It's not on! No popping...");
        }
    }
}