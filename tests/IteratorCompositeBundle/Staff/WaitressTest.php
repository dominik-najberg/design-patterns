<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 17:33
 */

namespace IteratorCompositeBundle\Staff;

use IteratorCompositeBundle\Menu\DinerMenu;
use IteratorCompositeBundle\Menu\PancakeHouseMenu;
use PHPUnit\Framework\TestCase;

class WaitressTest extends TestCase
{

    public function testWaitress()
    {
        $dinerMenu        = new DinerMenu();
        $pancakeHouseMenu = new PancakeHouseMenu();
        $waitress         = new Waitress($pancakeHouseMenu, $dinerMenu);

        $menu = $waitress->printMenu();

        $this->assertContains('A hot dog, with saurkraut, relish, onions, topped with cheese', $menu);
    }
}
