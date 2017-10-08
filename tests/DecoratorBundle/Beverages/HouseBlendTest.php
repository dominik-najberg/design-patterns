<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 08.10.17
 * Time: 13:30
 */

namespace DecoratorBundle\Tests\Beverages;

use DecoratorBundle\Beverages\Beverage;
use DecoratorBundle\Beverages\Espresso;
use DecoratorBundle\Beverages\HouseBlend;
use DecoratorBundle\Condiment\Mocha;
use DecoratorBundle\Condiment\Whip;
use PHPUnit\Framework\TestCase;

class HouseBlendTest extends TestCase
{
    /**
     * @var Beverage
     */
    private $beverage;

    protected function setUp()
    {
        $this->beverage = new Espresso();
    }

    public function testMocha()
    {
        $withMocha = new Mocha($this->beverage);

        $this->assertEquals('2.19', $withMocha->cost(), "The coffee has a weird price!");
        $this->assertEquals("Espresso TALL, Mocha", $withMocha->getDescription(), "Wrong order, m'am!");
    }

    public function testDoubleMocha()
    {
        $doubleMocha = new Mocha($this->beverage);
        $doubleMocha = new Mocha($doubleMocha);
        $doubleMocha = new Whip($doubleMocha);

        $this->assertEquals('2.69', $doubleMocha->cost(), "The coffee has a weird price!");
        $this->assertEquals("Espresso TALL, Mocha, Mocha, Whip", $doubleMocha->getDescription(), "That's not what I ordered!");
    }
    public function testDoubleMochaVenti()
    {
        $this->beverage->setSize('VENTI');
        $doubleMocha = new Mocha($this->beverage);
        $doubleMocha = new Mocha($doubleMocha);
        $doubleMocha = new Whip($doubleMocha);

        $this->assertEquals('2.99', $doubleMocha->cost(), "The coffee has a weird price!");
        $this->assertEquals("Espresso VENTI, Mocha, Mocha, Whip", $doubleMocha->getDescription(), "That's not what I ordered!");
    }
}
