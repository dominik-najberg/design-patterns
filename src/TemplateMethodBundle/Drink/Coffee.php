<?php
/**
 * User: potworny
 * Date: 18.10.17
 * Time: 19:18
 */

namespace TemplateMethodBundle\Drink;

class Coffee
{
    /**
     * @var array
     */
    private $debug = [];

    public function prepareRecipe(): void
    {
        $this->debug[] = $this->boilWater();
        $this->debug[] = $this->brewCoffeeGrinds();
        $this->debug[] = $this->pourInCup();
        $this->debug[] = $this->addSugarAndMilk();
    }

    public function boilWater(): string
    {
        return "Boiling water.";
    }

    public function brewCoffeeGrinds(): string
    {
        return "Dripping Coffee through filter.";
    }

    public function pourInCup(): string
    {
        return "Pouring into cup.";
    }

    public function addSugarAndMilk(): string
    {
        return "Adding Sugar and Milk";
    }

    /**
     * @return array
     */
    public function getDebug(): array
    {
        return $this->debug;
    }
}