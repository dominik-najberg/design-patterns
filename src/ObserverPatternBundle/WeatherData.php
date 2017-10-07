<?php

namespace ObserverPatternBundle;


class WeatherData extends Observable
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var float
     */
    private $pressure;

    public function measurementsChanged() : void
    {
        $this->setChanged();
        $this->notify();
    }

    /**
     * @param float $temperature
     * @param float $humidity
     * @param float $pressure
     */
    public function setMeasurements(float $temperature, float $humidity, float $pressure) : void
    {
        $this->temperature = $temperature;
        $this->humidity    = $humidity;
        $this->pressure    = $pressure;

        $this->measurementsChanged();
    }

    /**
     * @return float
     */
    public function getTemperature() : float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity() : float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure() : float
    {
        return $this->pressure;
    }
}