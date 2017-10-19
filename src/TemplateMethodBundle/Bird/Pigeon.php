<?php
/**
 * User: potworny
 * Date: 19.10.17
 * Time: 21:04
 */

namespace TemplateMethodBundle\Bird;


use Doctrine\Common\Comparable;

abstract class Pigeon implements Comparable
{
    /**
     * @var int
     */
    protected $weight = 0;

    /**
     * @var string
     */
    protected $name = "Pigeon";

    /**
     * Returns 0 if they are semantically equal, 1 if the other object
     * is less than the current one, or -1 if its more than the current one.
     *
     * @param mixed $other
     * @throws \Exception
     *
     * @return int
     */
    public function compareTo($other)
    {
        if (!($other instanceof Pigeon)) {
            throw new \Exception('This is not a pigeon');
        }

        if ($this->getWeight() == $other->getWeight()) {
            return 0;
        }

        return $this->getWeight() > $other->getWeight() ? 1 : -1;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    public function __toString()
    {
        return $this->name . ' (' . $this->weight . ' kg)';
    }


}