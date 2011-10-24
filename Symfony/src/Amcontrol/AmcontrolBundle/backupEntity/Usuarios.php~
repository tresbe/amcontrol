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

    public function __construct()
    {
        $this->tareas = new \Doctrine\Common\Collections\ArrayCollection();
    $this->imputaciones = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Add tareas
     *
     * @param Amcontrol\AmcontrolBundle\Entity\Tareas $tareas
     */
    public function addTareas(\Amcontrol\AmcontrolBundle\Entity\Tareas $tareas)
    {
        $this->tareas[] = $tareas;
    }

    /**
     * Get tareas
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Add imputaciones
     *
     * @param Amcontrol\AmcontrolBundle\Entity\Imputaciones $imputaciones
     */
    public function addImputaciones(\Amcontrol\AmcontrolBundle\Entity\Imputaciones $imputaciones)
    {
        $this->imputaciones[] = $imputaciones;
    }

    /**
     * Get imputaciones
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getImputaciones()
    {
        return $this->imputaciones;
    }
}