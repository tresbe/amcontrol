<?php

namespace Amcontrol\AmcontrolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table(name="peticiones")
* @ORM\Entity
**/
class Peticiones {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $idpeticiones
	/**
	* @ORM\Column(type="string")
	*/
	protected $mu
	/**
	* @ORM\Column(type="text")
	*/
	protected $descripcion
	/**
	* @ORM\Column(type="DateTime")
	*/
	protected $fechaini
	/**
	* @ORM\Column(type="DateTime")
	*/
	protected $fechafin	

}
