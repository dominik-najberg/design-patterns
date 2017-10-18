<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 12:29
 */

namespace AdapterFacadeBundle\Adapters;


use AdapterFacadeBundle\Birds\DuckInterface;
use AdapterFacadeBundle\Birds\TurkeyInterface;

class DuckAdapter implements TurkeyInterface
{
    /**
     * @var DuckInterface
     */
    private $duck;

    /**
     * DuckAdapter constructor
     *
     * @param DuckInterface $duck
     */
    public function __construct(DuckInterface $duck)
    {
        $this->duck = $duck;
    }

    public function gobble(): string
    {
        return $this->duck->quack();
    }

    public function fly(): string
    {
        return $this->duck->fly()."\nBut not too far... - panting already";
    }

}