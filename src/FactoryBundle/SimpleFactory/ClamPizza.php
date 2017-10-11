<?php
/**
 * User: potworny
 * Date: 11.10.17
 * Time: 19:39
 */

namespace FactoryBundle\SimpleFactory;


class ClamPizza extends Pizza
{
    /**
     * ClamPizza constructor.
     */
    public function __construct()
    {
        $this->name = "Disgusting Clam Pizza";

        parent::__construct();
    }
}