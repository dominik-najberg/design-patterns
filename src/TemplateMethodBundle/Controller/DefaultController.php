<?php

namespace TemplateMethodBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TemplateMethodBundle\Bird\BadHeavyMfPigeon;
use TemplateMethodBundle\Bird\MediocrePigeon;
use TemplateMethodBundle\Bird\Pigeon;
use TemplateMethodBundle\Bird\SweetLittleCrapCarrierPigeon;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $unsortedRats = new ArrayCollection([new BadHeavyMfPigeon(), new MediocrePigeon(), new SweetLittleCrapCarrierPigeon()]);
        // To filter active locations.

        $niceRats = $unsortedRats->filter(function($pigeon) {
            /** @var Pigeon $pigeon */
            return $pigeon->getWeight(); // filter based on status.
        });

        $vars = ['pigeons' => $niceRats,];

        return $this->render('TemplateMethodBundle:Default:index.html.twig', $vars);
    }
}
