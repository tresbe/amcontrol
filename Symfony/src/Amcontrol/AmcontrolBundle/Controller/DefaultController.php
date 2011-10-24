<?php

namespace Amcontrol\AmcontrolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('AmcontrolBundle:Default:index.html.twig', array('name' => $name));
    }
}
