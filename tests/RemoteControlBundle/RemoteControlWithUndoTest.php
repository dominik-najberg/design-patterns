<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 21:20
 */

namespace RemoteControlBundle\Tests;

use PHPUnit\Framework\TestCase;
use RemoteControlBundle\Commands\LightOffCommand;
use RemoteControlBundle\Commands\LightOnCommand;
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
}
