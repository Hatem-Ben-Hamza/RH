<?php

namespace CandidatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/ignore1")
     */
    public function indexAction()
    {
        return $this->render('CandidatBundle:Default:index.html.twig');
    }
}
