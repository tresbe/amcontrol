<?php

namespace Amcontrol\AmcontrolBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Amcontrol\AmcontrolBundle\Entity\Tareas;


class LoadInicial extends AbstractFixture
{

	public function load($manager)
	{
		for($i = 0; $i<6; $i++){
			$tarea = new Tareas();
			$tarea -> setmu("MU-2-2011-02323");
			$tarea -> setEstado("Análisis y planificación");
			
			$tarea -> setResponsable("AFC");
			
			$tarea -> setsd("SD002323412");
			$manager->persist($tarea);
		}
		$manager->flush();
	}		
}

