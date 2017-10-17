<?php

namespace AdapterFacadeBundle\Controller;

use AdapterFacadeBundle\Adapters\TurkeyAdapter;
use AdapterFacadeBundle\Birds\MallardDuck;
use AdapterFacadeBundle\Birds\WildTurkey;
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

        $vars = ['duck' => $duck,
            'turkey' => $turkey,
            'phonyDuck' => $phonyDuck];

        return $this->render('AdapterFacadeBundle:Default:index.html.twig', $vars);
    }
}
