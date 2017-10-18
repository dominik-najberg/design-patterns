<?php
/**
 * User: potworny
 * Date: 18.10.17
 * Time: 19:18
 */

namespace TemplateMethodBundle\Drink;


class Tea
{
    /**
     * @var array
     */
    private $debug = [];

    public function prepareRecipe(): void
    {
        $this->debug[] = $this->boilWater();
        $this->debug[] = $this->steepTeaBag();
        $this->debug[] = $this->addLemon();
        $this->debug[] = $this->pourInCup();
    }

    public function boilWater(): string
    {
        return "Boiling water.";
    }

    public function steepTeaBag(): string
    {
        return "Steeping the tea.";
    }

    public function addLemon(): string
    {
        return "Adding lemon.";
    }

    public function pourInCup(): string
    {
        return "Pouring into cup.";
    }

    /**
     * @return array
     */
    public function getDebug(): array
    {
        return $this->debug;
    }
}