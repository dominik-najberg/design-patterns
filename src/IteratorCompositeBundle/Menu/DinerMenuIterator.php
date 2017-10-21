<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 13:18
 */

namespace IteratorCompositeBundle\Menu;


class DinerMenuIterator implements \Iterator
{
    /**
     * @var MenuItem[]
     */
    private $menuItems;

    /**
     * DinerMenuIterator constructor
     *
     * @param array $menuItems
     */
    public function __construct(array $menuItems)
    {
        $this->menuItems = $menuItems;
    }

    /**
     * @param MenuItem $menuItem - I know this is a concrete class. I know this sucks.
     */
    public function attach(MenuItem $menuItem)
    {
        $this->menuItems[] = $menuItem;
    }

    public function rewind()
    {
        return reset($this->menuItems);
    }

    public function valid()
    {
        return false !== $this->current();
    }

    public function next()
    {
        return next($this->menuItems);
    }

    public function current()
    {
        return current($this->menuItems);
    }

    public function key()
    {
        return key($this->menuItems);
    }

}