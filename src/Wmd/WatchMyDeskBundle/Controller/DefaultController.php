<?php

namespace Wmd\WatchMyDeskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
    	//return $this->render('WmdWatchMyDeskBundle:Default:index.html.twig', array('name' => "Ricardo"));
        return array('name' => "Ricardo");
    }
}
