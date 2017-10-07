<?php

namespace ObserverPatternBundle;


use SplObserver;

/**
 * Class WeatherStation
 *
 * @package ObserverPatternBundle
 */
abstract class Observable implements \SplSubject
{
    private $changed = false;

    /**
     * Displays are stored here
     *
     * @var \SplObjectStorage
     */
    private $observers;

    /**
     * WeatherStation constructor.
     */
    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    /**
     * Notify Observers
     */
    public function notify()
    {
        if ($this->changed) {
            /**  @var \SplObserver $observer */
            foreach ($this->observers as $observer) {
                $observer->update($this);
            }
        }

        $this->changed = false;
    }

    public function setChanged()
    {
        $this->changed = true;
    }
}