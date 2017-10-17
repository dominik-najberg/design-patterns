<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 15:11
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

class HomeTheaterFacade
{
    /**
     * @var Amplifier
     */
    private $amp;

    /**
     * @var Tuner
     */
    private $tuner;

    /**
     * @var DvdPlayer
     */
    private $dvd;

    /**
     * @var CdPlayer
     */
    private $cd;

    /**
     * @var Projector
     */
    private $projector;

    /**
     * @var TheaterLights
     */
    private $lights;

    /**
     * @var Screen
     */
    private $screen;

    /**
     * @var PopcornPopper
     */
    private $popper;

    /**
     * HomeTheaterFacade constructor.
     * @param Amplifier $amp
     * @param Tuner $tuner
     * @param DvdPlayer $dvd
     * @param CdPlayer $cd
     * @param Projector $projector
     * @param TheaterLights $lights
     * @param Screen $screen
     * @param PopcornPopper $popper
     */
    public function __construct(Amplifier $amp, Tuner $tuner, DvdPlayer $dvd, CdPlayer $cd, Projector $projector,
                                TheaterLights $lights, Screen $screen, PopcornPopper $popper)
    {
        $this->amp = $amp;
        $this->tuner = $tuner;
        $this->dvd = $dvd;
        $this->cd = $cd;
        $this->projector = $projector;
        $this->lights = $lights;
        $this->screen = $screen;
        $this->popper = $popper;
    }


}