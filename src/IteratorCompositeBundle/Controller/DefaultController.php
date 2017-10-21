<?php

namespace IteratorCompositeBundle\Controller;

use IteratorCompositeBundle\Menu\DinerMenu;
use IteratorCompositeBundle\Menu\PancakeHouseMenu;
use IteratorCompositeBundle\Staff\Waitress;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $dinerMenu        = new DinerMenu();
        $pancakeHouseMenu = new PancakeHouseMenu();
        $waitress         = new Waitress($pancakeHouseMenu, $dinerMenu);

        $menu = $waitress->printMenu();

        return $this->render('IteratorCompositeBundle:Default:index.html.twig', ['menu' => $menu]);
    }
}
