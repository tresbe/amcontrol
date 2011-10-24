<?php

namespace Amcontrol\AmcontrolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Table(name="listas")
* @ORM\Entity
**/
class Listas {

	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $mu;

	/**
	* @ORM\Column(type="text", nullable=true)
	*/
	protected $descripcion;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $actividad;

	/**
	* @ORM\Column(type="text", nullable=true)
	*/
	protected $comentarios;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $sd;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $tipo;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $nivel;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $responsable;	


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
     * Set actividad
     *
     * @param string $actividad
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set comentarios
     *
     * @param text $comentarios
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    }

    /**
     * Get comentarios
     *
     * @return text 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set sd
     *
     * @param string $sd
     */
    public function setSd($sd)
    {
        $this->sd = $sd;
    }

    /**
     * Get sd
     *
     * @return string 
     */
    public function getSd()
    {
        return $this->sd;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
}