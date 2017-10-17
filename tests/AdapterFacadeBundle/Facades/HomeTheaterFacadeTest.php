<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 19:27
 */

namespace AdapterFacadeBundle\Facades;

use AdapterFacadeBundle\Devices\Amplifier;
use AdapterFacadeBundle\Devices\CdPlayer;
use AdapterFacadeBundle\Devices\DvdPlayer;
use AdapterFacadeBundle\Devices\PopcornPopper;
use AdapterFacadeBundle\Devices\Projector;
use AdapterFacadeBundle\Devices\Screen;
use AdapterFacadeBundle\Devices\TheaterLights;
use AdapterFacadeBundle\Devices\Tuner;
use PHPUnit\Framework\TestCase;

class HomeTheaterFacadeTest extends TestCase
{

    public function testHomeTheaterFacade()
    {
        $amp = new Amplifier();
        $cd  = new CdPlayer();
        $dvd = new DvdPlayer();
        $popper = new PopcornPopper();
        $projector = new Projector();
        $screen = new Screen();
        $lights = new TheaterLights();
        $tuner = new Tuner();

        $htf = new HomeTheaterFacade($amp, $tuner, $dvd, $cd, $projector, $lights, $screen, $popper);

        $this->assertFalse($amp->isOn());
        $this->assertFalse($popper->isOn());
        $this->assertFalse($lights->isOn());

        $htf->watchMovie('Police Academy');
        $this->assertTrue($amp->isOn());
        $this->assertTrue($popper->isOn());
        $this->assertTrue($lights->isOn());
        $this->assertEquals('Police Academy', $dvd->getTitle());

        $htf->endMovie();
        $this->assertFalse($amp->isOn());
        $this->assertFalse($popper->isOn());
        $this->assertTrue($lights->isOn());

    }
}
