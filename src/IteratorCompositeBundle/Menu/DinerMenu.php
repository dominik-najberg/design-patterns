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
class DinerMenu
{
    const MAX_ITEMS = 6;

    /**
     * @var array
     */
    private $menuItems = [];

    public function addItem(string $name, string $description, bool $vegetarian, float $price): ?string
    {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        if(count($this->menuItems) >= self::MAX_ITEMS) {
            return "Go away, monster. Menu's full";
        }

        $this->menuItems[] = $menuItem;

        return null;
    }

    /**
     * @return array
     */
    public function getMenuItems(): array
    {
        return $this->menuItems;
    }

    // other menu methods that depend heavily on the array
}