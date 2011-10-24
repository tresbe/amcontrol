<?php

namespace Amcontrol\AmcontrolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Amcontrol\AmcontrolBundle\Entity\Listas;

class ListaController extends Controller
{
	public function indexAction()
	{
		
		$em = $this->get('doctrine')->getEntityManager();
		$lista = $em->getRepository('AmcontrolBundle:Listas')->findAll();
		return $this->render(
		'AmcontrolBundle:Lista:index.html.twig',
		array('lista' => $lista)
		);	
	}

}
