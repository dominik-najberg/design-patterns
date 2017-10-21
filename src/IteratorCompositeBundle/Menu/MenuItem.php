<?php
/**
 * User: potworny
 * Date: 21.10.17
 * Time: 10:40
 */

namespace IteratorCompositeBundle\Menu;


class MenuItem
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $vegetarian = false;

    /**
     * @var float
     */
    private $price;

    /**
     * MenuItem constructor.
     *
     * @param string $name
     * @param string $description
     * @param bool $vegetarian
     * @param float $price
     */
    public function __construct(string $name, string $description, bool $vegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return bool
     */
    public function isVegetarian(): bool
    {
        return $this->vegetarian;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}