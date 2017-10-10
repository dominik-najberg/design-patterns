<?php

namespace FactoryBundle\Pizzas;

use Doctrine\Common\Collections\ArrayCollection;
use FactoryBundle\Ingredients\Clams;
use FactoryBundle\Ingredients\Dough;
use FactoryBundle\Ingredients\Pepperoni;
use FactoryBundle\Ingredients\Sauce;
use FactoryBundle\Ingredients\Veggie;

abstract class Pizza
{
    protected $name;

    /**
     * @var Dough
     */
    protected $dough;

    /**
     * @var Sauce
     */
    protected $souce;

    /**
     * @var Veggie[]
     */
    protected $veggies;

    /**
     * @var Pepperoni
     */
    protected $pepperoni;

    /**
     * @var Clams
     */
    protected $clams;

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
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}