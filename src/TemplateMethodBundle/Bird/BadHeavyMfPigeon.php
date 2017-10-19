<?php
/**
 * User: potworny
 * Date: 19.10.17
 * Time: 21:14
 */

namespace TemplateMethodBundle\Bird;


class BadHeavyMfPigeon extends Pigeon
{
    public function __construct()
    {
        $this->weight = 20;
        $this->name = "Bad Heavy MF Pigeon";
    }

}