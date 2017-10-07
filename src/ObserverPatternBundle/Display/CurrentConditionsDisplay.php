<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 07.10.17
 * Time: 18:06
 */

namespace ObserverPatternBundle\Display;

use ObserverPatternBundle\Observable;
use ObserverPatternBundle\WeatherData;
use SplSubject;

class CurrentConditionsDisplay implements \SplObserver, DisplayElement
{
    /**
     * @var Observable
     */
    private $observable;

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * CurrentConditionsDisplay constructor.
     *
     * @param Observable $observable
     */
    public function __construct(Observable $observable)
    {
        $this->observable = $observable;
    }

    /**
     * @param SplSubject $subject
     */
    public function update(SplSubject $subject) : void
    {
        /** @var WeatherData $subject */
        if ($subject instanceof WeatherData) {
            $this->temperature = $subject->getTemperature();
            $this->humidity    = $subject->getHumidity();

            $this->display();
        }
    }

    /**
     * @return string
     */
    public function display() : string
    {
        return "Current conditions: {$this->temperature} °C and {$this->humidity}% humidity";
    }
}