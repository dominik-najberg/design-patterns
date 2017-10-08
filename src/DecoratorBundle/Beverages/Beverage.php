<?php

namespace DecoratorBundle\Beverages;

use DecoratorBundle\MenuItemInterface;

/**
 * Class Beverage (drink up!)
 *
 * @package DecoratorBundle
 */
abstract class Beverage implements MenuItemInterface
{
    private $sizes = ['TALL' => 0.00, 'GRANDE' => 0.20, 'VENTI' => 0.30];

    private $size = "TALL";

    /**
     * @var string
     */
    protected $description = "Unknown Beverage";

    private function getSizePrice() : float
    {
        return array_key_exists($this->getSize(), $this->sizes) ? $this->sizes[$this->getSize()] : 0.00;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description . ' ' . $this->getSize();
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return 0.00 + $this->getSizePrice();
    }

}