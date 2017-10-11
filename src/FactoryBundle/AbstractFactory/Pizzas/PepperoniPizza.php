<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 21:30
 */

namespace FactoryBundle\AbstractFactory\Pizzas;


use FactoryBundle\AbstractFactory\Ingredients\PizzaIngredientFactory;

class PepperoniPizza extends Pizza
{
    /**
     * @var PizzaIngredientFactory
     */
    private $ingredientFactory;

    /**
     * PepperoniPizza constructor.
     *
     * @param PizzaIngredientFactory $ingredientFactory
     */
    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;

        parent::__construct();
    }


    public function prepare(): string
    {
        $feedback = "Preparing {$this->getName()}";

        $this->dough     = $this->ingredientFactory->createDough();
        $this->sauce     = $this->ingredientFactory->createSauce();
        $this->cheese    = $this->ingredientFactory->createCheese();
        $this->pepperoni = $this->ingredientFactory->createPepperoni();

        return $feedback;
    }

}