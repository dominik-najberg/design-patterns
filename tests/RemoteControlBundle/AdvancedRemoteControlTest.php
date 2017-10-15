<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 19:48
 */

namespace RemoteControlBundle;


use PHPUnit\Framework\TestCase;
use RemoteControlBundle\Commands\CeilingFanOffCommand;
use RemoteControlBundle\Commands\CeilingFanOnCommand;
use RemoteControlBundle\Commands\GarageDoorCloseCommand;
use RemoteControlBundle\Commands\GarageDoorOpenCommand;
use RemoteControlBundle\Commands\LightOffCommand;
use RemoteControlBundle\Commands\LightOnCommand;
use RemoteControlBundle\Commands\StereoOffWithCDCommand;
use RemoteControlBundle\Commands\StereoOnWithCDCommand;
use RemoteControlBundle\Devices\CeilingFan;
use RemoteControlBundle\Devices\GarageDoor;
use RemoteControlBundle\Devices\Light;
use RemoteControlBundle\Devices\Stereo;

class AdvancedRemoteControlTest extends TestCase
{
    /**
     * @var AdvancedRemoteControl
     */
    private $arc;

    protected function setUp()
    {
        $this->arc = new AdvancedRemoteControl();
    }


    public function testAdvanceRemoteControl()
    {
        $this->assertInstanceOf(AdvancedRemoteControl::class, $this->arc, 'Wrong Remote!');

        $livingRoomLight = new Light('Living Room');
        $kitchenLight    = new Light('Kitchen');
        $ceilingFan      = new CeilingFan('Living Room');
        $garageDoor      = new GarageDoor();
        $stereo          = new Stereo('Balcony');

        $livingRoomLightOn  = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);
        $kitchenLightOn     = new LightOnCommand($kitchenLight);
        $kitchenLightOff    = new LightOffCommand($kitchenLight);

        $ceilingFanOn       = new CeilingFanOnCommand($ceilingFan);
        $ceilingFanOff      = new CeilingFanOffCommand($ceilingFan);

        $garageDoorUp       = new GarageDoorOpenCommand($garageDoor);
        $garageDoorDown     = new GarageDoorCloseCommand($garageDoor);

        $stereoOnWithCD     = new StereoOnWithCDCommand($stereo);
        $stereoOffWithCD    = new StereoOffWithCDCommand($stereo);

        $this->arc->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $this->arc->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $this->arc->setCommand(2, $ceilingFanOn, $ceilingFanOff);
        $this->arc->setCommand(3, $garageDoorUp, $garageDoorDown);
        $this->arc->setCommand(4, $stereoOnWithCD, $stereoOffWithCD);

        $this->arc->onButtonWasPushed(0);
        $this->arc->onButtonWasPushed(2);
        $this->arc->onButtonWasPushed(4);


        $this->assertTrue($livingRoomLight->isOn(), 'Is it on in the Living Room?');
        $this->assertFalse($kitchenLight->isOn(), 'Who switched it on in the kitchen?');
        $this->assertTrue($ceilingFan->isOn(), 'It\'s too hot in the living room!');
        $this->assertFalse($garageDoor->isUp(), 'The garage door is open!');
        $this->assertTrue($stereo->isOn(), 'The Stereo is off...');
        $this->assertEquals('CD', $stereo->getMode(), 'Wrong mode on the stereo.');

    }
}
