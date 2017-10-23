<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 14:58
 */

namespace IteratorCompositeBundle\Staff;


use IteratorCompositeBundle\Menu\Menu;
use IteratorCompositeBundle\Menu\MenuItem;

class Waitress
{
    /**
     * @var Menu
     */
    private $pancakeHouseMenu;

    /**
     * @var Menu
     */
    private $dinerMenu;

    /**
     * Waitress constructor
     *
     * @param Menu $pancakeHouseMenu
     * @param Menu $dinerMenu
     */
    public function __construct(Menu $pancakeHouseMenu, Menu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $output  = ("Breakfast Menu\n-------------\n");
        $output .= $this->parseMenu($this->pancakeHouseMenu->createIterator());
        $output .= ("\n\nLunch Menu\n-------------\n");
        $output .= $this->parseMenu($this->dinerMenu->createIterator());

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