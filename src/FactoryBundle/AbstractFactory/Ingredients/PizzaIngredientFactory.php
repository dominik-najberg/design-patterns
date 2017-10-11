<?php

namespace FactoryBundle\AbstractFactory\Ingredients;


interface PizzaIngredientFactory
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;

    /**
     * @return Veggie[]
     */
    public function createVeggies();
    public function createPepperoni(): Pepperoni;
    public function createClam(): Clams;
}