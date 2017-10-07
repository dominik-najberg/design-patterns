<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 07.10.17
 * Time: 19:58
 */

namespace ObserverPatternBundle\Tests;

use ObserverPatternBundle\Display\CurrentConditionsDisplay;
use ObserverPatternBundle\Display\ForecastDisplay;
use ObserverPatternBundle\WeatherData;
use PHPUnit\Framework\TestCase;

class WeatherDataTest extends TestCase
{

    public function testWeatherData()
    {
        $wd  = new WeatherData();
        $ccd = new CurrentConditionsDisplay($wd);
        $fd  = new ForecastDisplay($wd);
        $wd->attach($ccd);
        $wd->attach($fd);
        $wd->setMeasurements(25.1, 80, 1010.2);

        $this->assertEquals("Current conditions: 25.1 °C and 80% humidity", $ccd->display(), 'Current weather is a bit strange');
        $this->assertEquals("Improving weather on the way!", $fd->display());
    }
}
