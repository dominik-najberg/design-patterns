<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 07.10.17
 * Time: 14:12
 */

namespace Tests\DuckBundle\Ducks;


use DuckBundle\Ducks\MallardDuck;
use PHPUnit\Framework\TestCase;

class MallardDuckTest extends TestCase
{

    public function testMallardDuck()
    {
        $md = new MallardDuck();

        $this->assertContains('I can fly', $md->performFly(), 'It cannot fly?');
        $this->assertContains('Quack, quack', $md->performQuack(), 'It cannot quack?');
        $this->assertContains('I can swim', $md->swim(), 'Every duck can swim, right?');
        $this->assertTrue(is_subclass_of($md,'DuckBundle\Duck'), 'It is an impostor!');
    }
}
