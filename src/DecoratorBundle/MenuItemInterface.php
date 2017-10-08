<?php
/**
 * Created by PhpStorm.
 * User: potworny
 * Date: 08.10.17
 * Time: 12:21
 */

namespace DecoratorBundle;


interface MenuItemInterface
{
    public function getDescription(): string;
    public function cost(): float;
}