<?php
/**
 * User: potworny
 * Date: 18.10.17
 * Time: 21:14
 */

namespace TemplateMethodBundle\Drink;

use PHPUnit\Framework\TestCase;

class CoffeeTest extends TestCase
{

    public function testCoffee()
    {
        $coffee = new Coffee();

        $this->assertArrayHasKey('Boiling water.', $coffee->getDebug());
    }
}
