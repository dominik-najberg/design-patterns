<?php

namespace SimpleFactoryBundle\Pizzas;

use Doctrine\Common\Collections\ArrayCollection;

abstract class Pizza
{
    protected $name;

    protected $dough;

    protected $souce;

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
        $output  = "Preparing {$this->name}\n";
        $output .= "Tossing dough...\n";
        $output .= "Adding sauce...\n";
        $output .= "Adding toppings...\n";

        foreach ($this->toppings as $topping){
            $output .= $topping . "\n";
        }

        return $output;
    }

    public function bake()
    {
        return "Now we bake it for 29 minutes at 350";
    }

    public function cut()
    {
        return "Please, cut it into diagonal slices.";
    }

    public function box()
    {
        return "Where is the box? Place the pizza in the box.";
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}