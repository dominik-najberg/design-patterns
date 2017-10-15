<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 21:20
 */

namespace RemoteControlBundle\Tests;

use PHPUnit\Framework\TestCase;
use RemoteControlBundle\Commands\CeilingFanHighCommand;
use RemoteControlBundle\Commands\CeilingFanMediumCommand;
use RemoteControlBundle\Commands\CeilingFanOffCommand;
use RemoteControlBundle\Commands\LightOffCommand;
use RemoteControlBundle\Commands\LightOnCommand;
use RemoteControlBundle\Devices\CeilingFan;
use RemoteControlBundle\Devices\Light;
use RemoteControlBundle\RemoteControlWithUndo;

class RemoteControlWithUndoTest extends TestCase
{
    /**
     * @var RemoteControlWithUndo
     */
    private $rcwu;

    protected function setUp()
    {
        $this->rcwu = new RemoteControlWithUndo();
    }

    public function testRemoteWithUndoFunctionality()
    {
        $this->assertInstanceOf(RemoteControlWithUndo::class, $this->rcwu);

        $livingRoomLight    = new Light('Living Room');
        $livingRoomLightOn  = new LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new LightOffCommand($livingRoomLight);

        $this->rcwu->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

        $this->assertFalse($livingRoomLight->isOn(), 'It should be switched off, man!');
        $this->rcwu->onButtonWasPushed(0);
        $this->assertTrue($livingRoomLight->isOn(), 'Why is it still off?');

        $this->rcwu->undoButtonWasPushed();
        $this->assertFalse($livingRoomLight->isOn(), 'What? The Undo functionality failed.');

    }

    public function testAdvanceRemoteControlWithUndo()
    {
        $this->assertInstanceOf(RemoteControlWithUndo::class, $this->rcwu, 'Wrong Remote!');

        $ceilingFan       = new CeilingFan('Living Room');

        $ceilingFanHigh   = new CeilingFanHighCommand($ceilingFan);
        $ceilingFanMedium = new CeilingFanMediumCommand($ceilingFan);
        $ceilingFanOff    = new CeilingFanOffCommand($ceilingFan);

        $this->rcwu->setCommand(0, $ceilingFanHigh, $ceilingFanOff);
        $this->rcwu->setCommand(1, $ceilingFanMedium, $ceilingFanOff);

        $this->assertFalse($ceilingFan->isOn(), "Who's left the fan on for the night?");

        $this->rcwu->onButtonWasPushed(0);
        $this->assertEquals(CeilingFan::HIGH, $ceilingFan->getSpeed(), 'Wrong speed. Was supposed to be high.');
        $this->rcwu->offButtonWasPushed(0);
        $this->assertFalse($ceilingFan->isOn(), "It won't switch off?");
        $this->rcwu->undoButtonWasPushed();
        $this->assertEquals(CeilingFan::HIGH, $ceilingFan->getSpeed(), "Undo wouldn't work. Why not high?");


    }
}
