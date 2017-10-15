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
use RemoteControlBundle\Commands\HotTubOffCommand;
use RemoteControlBundle\Commands\HotTubOnCommand;
use RemoteControlBundle\Commands\LightOffCommand;
use RemoteControlBundle\Commands\LightOnCommand;
use RemoteControlBundle\Commands\MacroCommand;
use RemoteControlBundle\Commands\StereoOffWithCDCommand;
use RemoteControlBundle\Commands\StereoOnWithCDCommand;
use RemoteControlBundle\Commands\TvOffCommand;
use RemoteControlBundle\Commands\TvOnCommand;
use RemoteControlBundle\Devices\CeilingFan;
use RemoteControlBundle\Devices\HotTub;
use RemoteControlBundle\Devices\Light;
use RemoteControlBundle\Devices\TV;
use RemoteControlBundle\Devices\Stereo;
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

    public function testAdvancedRemoteControlWithMacro()
    {
        $this->assertInstanceOf(RemoteControlWithUndo::class, $this->rcwu, 'Wrong Remote!');

        $light  = new Light('Living Room');
        $tv     = new TV('Living Room');
        $stereo = new Stereo('Living Room');
        $hottub = new HotTub(); // I want this is the Living Room, too!

        $lightOff  = new LightOffCommand($light);
        $lightOn   = new LightOnCommand($light);

        $tvOn      = new TvOnCommand($tv);
        $tvOff     = new TvOffCommand($tv);

        $stereoOn  = new StereoOnWithCDCommand($stereo);
        $stereoOff = new StereoOffWithCDCommand($stereo);

        $hottubOn  = new HotTubOnCommand($hottub);
        $hottubOff = new HotTubOffCommand($hottub);

        $partyOn  = [$lightOn, $tvOn, $stereoOn, $hottubOn];
        $partyOff = [$lightOff, $tvOff, $stereoOff, $hottubOff];

        $partyOnMacro = new MacroCommand($partyOn);
        $partyOffMacro = new MacroCommand($partyOff);

        $this->rcwu->setCommand(0, $partyOnMacro, $partyOffMacro);

        $this->rcwu->onButtonWasPushed(0);

        $this->assertTrue($stereo->isOn());
        $this->assertTrue($hottub->isOn());

        $this->rcwu->undoButtonWasPushed();

        $this->assertFalse($stereo->isOn());
        $this->assertFalse($hottub->isOn());

    }
}
