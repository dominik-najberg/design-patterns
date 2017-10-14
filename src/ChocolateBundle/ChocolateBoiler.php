<?php

namespace ChocolateBundle;

/**
 * Class ChocolateBoiler
 *
 * @package ChocolateBundle
 */
class ChocolateBoiler
{
    /**
     * @var ChocolateBoiler
     */
    private static $boiler;

    /**
     * @var bool
     */
    private $empty;

    /**
     * @var bool
     */
    private $boiled;

    /**
     * ChocolateBoiler constructor for private use only
     */
    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    /**
     * no cloning around
     */
    private function __clone()
    {
    }

    /**
     * don't wake me up
     */
    private function __wakeup()
    {
    }

    /**
     * @return ChocolateBoiler
     */
    public static function getInstance(): ChocolateBoiler
    {
        if (null === static::$boiler)
        {
            static::$boiler = new static();
        }

        return static::$boiler;
    }

    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;

            // fill the boiler with a milk/chocolate mixture
        }
    }

    public function drain()
    {
        if (!$this->isEmpty() && $this->isBoiled()) {
            // drain the boiled delicious mixture
            $this->empty = true;
        }
    }

    public function boil()
    {
        if(!$this->isEmpty() && !$this->isBoiled()) {
            // bring contents to a boil
            $this->boiled = true;
        }
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->empty;
    }

    /**
     * @return bool
     */
    public function isBoiled(): bool
    {
        return $this->boiled;
    }
}