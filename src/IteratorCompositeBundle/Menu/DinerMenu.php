<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 10:38
 */

namespace IteratorCompositeBundle\Menu;

/**
 * Class DinerMenu
 *
 * This menu is based on an array
 *
 * @package IteratorCompositeBundle\Menu
 */
class DinerMenu implements Menu
{
    const MAX_ITEMS = 6;

    /**
     * @var array
     */
    private $menuItems = [];

    /**
     * DinerMenu constructor.
     */
    public function __construct()
    {
        $this->addItem("Vegetarian BLT", "(Fakin') Bacon with lettuce and tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce and tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29);
        $this->addItem("Hot Dog", "A hot dog, with saurkraut, relish, onions, topped with cheese", false, 3.05);
    }


    public function addItem(string $name, string $description, bool $vegetarian, float $price): ?string
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        if(count($this->menuItems) >= self::MAX_ITEMS) {
            return "Go away, monster. Menu's full";
        }

        $this->menuItems[] = $menuItem;

        return null;
    }

    public function createIterator(): \Iterator
    {
        return new DinerMenuIterator($this->menuItems);
    }

    // other menu methods that depend heavily on the array
}