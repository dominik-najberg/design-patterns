<?php
/**
 * User: potworny
 * Date: 17.10.17
 * Time: 10:40
 */

namespace AdapterFacadeBundle\Adapters;


use AdapterFacadeBundle\Birds\DuckInterface;
use AdapterFacadeBundle\Birds\TurkeyInterface;

class TurkeyAdapter implements DuckInterface
{
    /**
     * @var TurkeyInterface
     */
    private $turkey;

    /**
     * TurkeyAdapter constructor
     *
     * @param TurkeyInterface $turkey
     */
    public function __construct(TurkeyInterface $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack(): string
    {
        return $this->turkey->gobble();
    }

    public function fly(): string
    {
        $output = "";

        for ($i = 0; $i < 5; $i++) {
            $output .= $this->turkey->fly()."\n";
        }

        return $output;
    }

}