<?php
/**
 * User: potworny
 * Date: 18.10.17
 * Time: 19:18
 */

namespace TemplateMethodBundle\Drink;

class Coffee extends CaffeineBeverage
{
    public function brew(): string
    {
        return "Dripping Coffee through filter.";
    }

    public function addCondiments(): string
    {
        return "Adding Sugar and Milk";
    }
}