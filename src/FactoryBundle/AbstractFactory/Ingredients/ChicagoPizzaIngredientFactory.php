<?php

namespace FactoryBundle\AbstractFactory\Ingredients;


class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozarellaCheese();
    }

    /**
     * @return Veggie[]
     */
    public function createVeggies()
    {
        return [new BlackOlives(), new Spinach(), new EggPlant()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }

}