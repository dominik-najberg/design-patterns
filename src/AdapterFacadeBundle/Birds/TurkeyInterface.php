<?php
/**
 * User: potworny
 * Date: 15.10.17
 * Time: 21:07
 */

namespace AdapterFacadeBundle\Birds;

/**
 * Interface DuckInterface
 *
 * I am adding "Interface" suffix to stick to Symfony naming conventions. Yes, now.
 *
 * @package AdapterFacadeBundle\Birds
 */
interface TurkeyInterface
{
    public function gobble(): string;
    public function fly(): string;
}