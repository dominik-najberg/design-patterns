<?php
/**
 * User: potworny
 * Date: 23.10.17
 * Time: 19:28
 */

namespace IteratorCompositeBundle\Menu;


interface Menu
{
    public function createIterator(): \Iterator;
}