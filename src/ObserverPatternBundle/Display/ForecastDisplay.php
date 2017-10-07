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

class ForecastDisplay implements \SplObserver, DisplayElement
{
    /**
     * @var Observable
     */
    private $observable;

    /**
     * @var float
     */
    private $lastPressure;

    /**
     * @var float
     */
    private $currentPressure = 19.00;

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
            $this->lastPressure    = $this->currentPressure;
            $this->currentPressure = $subject->getPressure();

            $this->display();
        }
    }

    /**
     * @return string
     */
    public function display() : string
    {
        return $this->currentPressure > $this->lastPressure ? "Improving weather on the way!" : "The weather will be worse";
    }
}