<?php

namespace Amcontrol\AmcontrolBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table(name="usuarios")
* @ORM\Entity
**/
class Usuarios {
	
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $id;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $nombre;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $password;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $mail;

	/**
	* @ORM\OneToMany(targetEntity="Tareas",
	* mappedBy="usuario")
	*/
	protected $tareas;

	/**
	* @ORM\OneToMany(targetEntity="Imputaciones",
	* mappedBy="usuario")
	*/
	protected $imputaciones;

}
?>
