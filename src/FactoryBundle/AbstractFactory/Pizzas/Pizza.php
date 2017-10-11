<?php

namespace FactoryBundle\AbstractFactory\Pizzas;

use Doctrine\Common\Collections\ArrayCollection;
use FactoryBundle\AbstractFactory\Ingredients\Cheese;
use FactoryBundle\AbstractFactory\Ingredients\Clams;
use FactoryBundle\AbstractFactory\Ingredients\Dough;
use FactoryBundle\AbstractFactory\Ingredients\Pepperoni;
use FactoryBundle\AbstractFactory\Ingredients\Sauce;
use FactoryBundle\AbstractFactory\Ingredients\Veggie;

abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Dough
     */
    protected $dough;

    /**
     * @var Sauce
     */
    protected $sauce;

    /**
     * @var ArrayCollection|Veggie
     */
    protected $veggies;

    /**
     * @var Cheese
     */
    protected $cheese;

    /**
     * @var Pepperoni
     */
    protected $pepperoni;

    /**
     * @var Clams
     */
    protected $clams;

    /**
     * Pizza constructor.
     */
    public function __construct()
    {
        $this->toppings = new ArrayCollection();
    }

    public abstract function prepare(): string;

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

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}