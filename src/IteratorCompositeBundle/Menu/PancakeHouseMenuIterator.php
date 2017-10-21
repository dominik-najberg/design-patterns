<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 10:15
 */

namespace IteratorCompositeBundle\Menu;


use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class PancakeHouseMenuIterator
 *
 * @package IteratorCompositeBundle\Menu
 */
class PancakeHouseMenuIterator implements \Iterator
{
    /**
     * Let's pretend an ArrayCollection is so very different from an array
     *
     * @var ArrayCollection
     */
    private $menuItems;

    /**
     * PancakeHouseMenu constructor
     *
     * @param ArrayCollection $menuItems
     */
    public function __construct(ArrayCollection $menuItems)
    {
        $this->menuItems = $menuItems;
    }

    /**
     * @param MenuItem $menuItem - I know this is a concrete class. I know this sucks.
     */
    public function attach(MenuItem $menuItem)
    {
        $this->menuItems->add($menuItem);
    }

    public function rewind()
    {
        return $this->menuItems->first();
    }

    public function valid()
    {
        return false !== $this->current();
    }

    public function next()
    {
        return $this->menuItems->next();
    }

    public function current()
    {
        return $this->menuItems->current();
    }

    public function key()
    {
        return $this->menuItems->key();
    }

    // other methods that heavily depend on the ArrayCollection
}