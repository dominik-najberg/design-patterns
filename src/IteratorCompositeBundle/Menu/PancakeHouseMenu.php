<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 10:15
 */

namespace IteratorCompositeBundle\Menu;


use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class PancakeHouseMenu
 *
 * This menu is based on an ArrayCollection
 *
 * @package IteratorCompositeBundle\Menu
 */
class PancakeHouseMenu implements Menu
{
    /**
     * Let's pretend an ArrayCollection is so very different from an array
     *
     * @var ArrayCollection|MenuItem[]
     */
    private $menuItems;

    /**
     * PancakeHouseMenu constructor.
     */
    public function __construct()
    {
        $this->menuItems = new ArrayCollection();

        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);
        $this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", false, 2.99);
        $this->addItem("Blueberry Pancakes", "Pancakes made with blueberries that were peed on by a moose", true, 3.49);
        $this->addItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price): void
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        $this->menuItems->add($menuItem);
    }

    public function createIterator(): \Iterator
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }

    // other methods that heavily depend on the ArrayCollection
}