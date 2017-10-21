<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 14:58
 */

namespace IteratorCompositeBundle\Staff;


use IteratorCompositeBundle\Menu\DinerMenu;
use IteratorCompositeBundle\Menu\MenuItem;
use IteratorCompositeBundle\Menu\PancakeHouseMenu;
use IteratorCompositeBundle\Menu\PancakeHouseMenuIterator;

class Waitress
{
    /**
     * @var PancakeHouseMenu
     */
    private $pancakeHouseMenu;

    /**
     * @var DinerMenu
     */
    private $dinerMenu;

    /**
     * Waitress constructor
     *
     * @param PancakeHouseMenu $pancakeHouseMenu
     * @param DinerMenu $dinerMenu
     */
    public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $output  = ("Breakfast Menu\n-------------\n");
        $output .= $this->parseMenu($this->pancakeHouseMenu->getPancakeHouseMenuIterator());
        $output .= ("\n\nLunch Menu\n-------------\n");
        $output .= $this->parseMenu($this->dinerMenu->getDinerMenuIterator());

        return $output;
    }

    private function parseMenu(\Iterator $iterator): string
    {
        $output = [];

        /** @var MenuItem $menuItem */
        foreach ($iterator as $menuItem)
        {
            $output[] = "{$menuItem->getName()}, {$menuItem->getPrice()} -- {$menuItem->getDescription()}";
        }

        return implode("\n", $output);
    }
}