<?php
/**
 * User: potworny
 * Date: 18.10.17
 * Time: 19:18
 */

namespace TemplateMethodBundle\Drink;


class Tea extends CaffeineBeverage
{
    public function brew(): string
    {
        return "Steeping the tea.";
    }

    public function addCondiments(): string
    {
        return "Adding lemon.";
    }
}