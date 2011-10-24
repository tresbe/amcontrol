<?php

namespace Amcontrol\AmcontrolBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Amcontrol\AmcontrolBundle\Entity\Listas;


class LoadInicial extends AbstractFixture
{

	public function load($manager)
	{
		for($i = 0; $i<6; $i++){
			$lista = new Listas();
			$lista -> setMu("MU-2-2011-02323");
			$lista -> setDescripcion("Descripción de la tarea");
			$lista -> setActividad("Análisis y planificación");
			$lista -> setComentarios("Pendiente del OK de Carmen");
			$lista -> setSd("SD0002302");
			$lista -> setTipo("EV");
			$lista -> setResponsable("Iván");
			
			$manager -> persist($lista);
		}
		$manager->flush();
	}		
}

