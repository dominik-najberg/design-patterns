<?php

namespace DuckBundle;

use DuckBundle\Behaviour\FlyBehaviour;
use DuckBundle\Behaviour\QuackBehaviour;

abstract class Duck
{
    /**
     * @var QuackBehaviour
     */
    private $quackBehaviour;

    /**
     * @var FlyBehaviour
     */
    private $flyBehaviour;

    /**
     * Duck constructor.
     */
    public function __construct()
    {
    }

    public abstract function display();

    /**
     * @param QuackBehaviour $quackBehaviour
     */
    public function setQuackBehaviour(QuackBehaviour $quackBehaviour)
    {
        $this->quackBehaviour = $quackBehaviour;
    }

    /**
     * @param FlyBehaviour $flyBehaviour
     */
    public function setFlyBehaviour(FlyBehaviour $flyBehaviour)
    {
        $this->flyBehaviour = $flyBehaviour;
    }

    /**
     * @return string
     */
    public function performQuack()
    {
        return $this->quackBehaviour->quack();
    }

    /**
     * @return string
     */
    public function performFly()
    {
        return $this->flyBehaviour->fly();
    }

    public function swim()
    {
        return "I can swim. No problem.\n";
    }
}