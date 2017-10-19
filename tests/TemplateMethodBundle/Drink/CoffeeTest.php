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
        $coffee->prepareRecipe();

        $this->assertContains('Boiling water.', $coffee->getDebug(), 'The water is cold!');
        $this->assertCount(5, $coffee->getDebug(), 'Too few steps when making coffee');
    }
}
