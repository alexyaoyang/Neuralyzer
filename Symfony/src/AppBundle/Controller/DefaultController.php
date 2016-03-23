<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
    * @Route("/")
    */
    public function showAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }
}