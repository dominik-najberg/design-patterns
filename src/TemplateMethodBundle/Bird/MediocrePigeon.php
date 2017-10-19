<?php
/**
 * User: potworny
 * Date: 19.10.17
 * Time: 21:16
 */

namespace TemplateMethodBundle\Bird;


class MediocrePigeon extends Pigeon
{
    /**
     * MediocrePigeon constructor.
     */
    public function __construct()
    {
        $this->weight = 10;
        $this->name = 'Simple Gray Good For Nothing Flying Rat';
    }
}