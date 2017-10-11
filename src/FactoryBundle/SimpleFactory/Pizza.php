<?php

namespace FactoryBundle\SimpleFactory;

use Doctrine\Common\Collections\ArrayCollection;

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $dough;

    /**
     * @var string
     */
    protected $sauce;

    /**
     * @var ArrayCollection
     */
    protected $toppings;

    /**
     * Pizza constructor.
     */
    public function __construct()
    {
        $this->toppings = new ArrayCollection();
    }

    public function prepare(): string
    {
        $pizza  = "Preparing {$this->name}\n";
        $pizza .= "Tossing dough...\n";
        $pizza .= "Adding sauce...\n";
        $pizza .= "Adding toppings: \n";

        foreach ($this->toppings as $topping) {
            $pizza .= "   $topping\n";
        }

        return $pizza;
    }

    public function bake(): string
    {
        return "Bake for 25 minutes at 350 °C";
    }

    public function cut(): string
    {
        return "Cutting the pizza into diagonal slices";
    }

    public function box(): string
    {
        return "Place the pizza into a fairly clean box";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}