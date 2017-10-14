<?php
/**
 * User: potworny
 * Date: 14.10.17
 * Time: 11:36
 */

namespace ChocolateBundle\Tests;

use ChocolateBundle\ChocolateBoiler;
use PHPUnit\Framework\TestCase;

class ChocolateBoilerTest extends TestCase
{

    public function testBoiler()
    {
        $boiler = ChocolateBoiler::getInstance();

        $this->assertInstanceOf(ChocolateBoiler::class, $boiler, 'It is not the boiler!');
        $this->assertTrue($boiler->isEmpty(), 'Why is it not empty?');

        $boiler->fill();
        $this->assertFalse($boiler->isEmpty(), 'Do we have a leak?');

        $boiler->drain();
        $this->assertFalse($boiler->isEmpty(), 'We cannot drain without boiling!');

        $boiler->boil();
        $this->assertTrue($boiler->isBoiled(), 'Why is it still cold?');

        $boiler->drain();
        $this->assertTrue($boiler->isEmpty(), 'The boiler won\'t empty itself. A mouse in the outflow?');
    }
}
