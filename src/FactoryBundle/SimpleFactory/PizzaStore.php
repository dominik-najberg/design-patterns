<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 19:14
 */

namespace FactoryBundle\SimpleFactory;


abstract class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    protected $factory;

    /**
     * PizzaStore constructor.
     *
     * @param SimplePizzaFactory $factory
     */
    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @param string $type
     *
     * @return Pizza
     */
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}