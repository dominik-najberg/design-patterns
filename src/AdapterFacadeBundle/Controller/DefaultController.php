<?php

namespace AdapterFacadeBundle\Controller;

use AdapterFacadeBundle\Adapters\DuckAdapter;
use AdapterFacadeBundle\Adapters\TurkeyAdapter;
use AdapterFacadeBundle\Birds\MallardDuck;
use AdapterFacadeBundle\Birds\WildTurkey;
use AppBundle\Service\MadService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $duck = new MallardDuck();
        $turkey = new WildTurkey();
        $phonyDuck = new TurkeyAdapter($turkey);
        $phonyTurkey = new DuckAdapter($duck);
        $serviceTest = $this->get(MadService::class)->getSomethingInteresting();

        $vars = ['duck' => $duck,
            'turkey' => $turkey,
            'phonyDuck' => $phonyDuck,
            'phonyTurkey' => $phonyTurkey,
            'serviceTest' => $serviceTest,
        ];

        return $this->render('AdapterFacadeBundle:Default:index.html.twig', $vars);
    }
}
