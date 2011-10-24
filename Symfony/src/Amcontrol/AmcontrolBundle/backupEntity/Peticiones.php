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
	protected $idpeticiones;
	/**
	* @ORM\Column(type="string")
	*/
	protected $mu;
	/**
	* @ORM\Column(type="text")
	*/
	protected $descripcion;
	/**
	* @ORM\Column(type="date")
	*/
	protected $fechaini;
	/**
	* @ORM\Column(type="date")
	*/
	protected $fechafin;	


    /**
     * Get idpeticiones
     *
     * @return integer 
     */
    public function getIdpeticiones()
    {
        return $this->idpeticiones;
    }

    /**
     * Set mu
     *
     * @param string $mu
     */
    public function setMu($mu)
    {
        $this->mu = $mu;
    }

    /**
     * Get mu
     *
     * @return string 
     */
    public function getMu()
    {
        return $this->mu;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaini
     *
     * @param date $fechaini
     */
    public function setFechaini($fechaini)
    {
        $this->fechaini = $fechaini;
    }

    /**
     * Get fechaini
     *
     * @return date 
     */
    public function getFechaini()
    {
        return $this->fechaini;
    }

    /**
     * Set fechafin
     *
     * @param date $fechafin
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;
    }

    /**
     * Get fechafin
     *
     * @return date 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }
}