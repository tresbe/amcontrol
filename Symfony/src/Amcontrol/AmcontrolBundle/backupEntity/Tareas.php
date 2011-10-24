<?php

namespace Amcontrol\AmcontrolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="tareas")
 * @ORM\Entity
 */
class Tareas
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $idtarea;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $descripcion;

	/**
	* @ORM\Column(type="date")
	*/
	protected $fechainicio;

	/**
	* @ORM\Column(type="date")
	*/
	protected $fechafin;

	
	/**
	* @ORM\ManyToOne(targetEntity="TiposTarea",inversedBy="tareas", 
	* cascade={"remove"})
	* @ORM\JoinColumn(name="tipotarea_id",referencedColumnName="idtipotarea")
	*/
	protected $tipotarea;

	/**	
	 * @ORM\Column(type="string")
	 */
	protected $mu;
	
	/**	
	 * @ORM\Column(type="string")
	 */
	protected $estado;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $responsable;

	/**
	* @ORM\Column(type="string")
	*/
	protected $sd;
	
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
     * Set estado
     *
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
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
     * Set ssseed
     *
     * @param string $ssseed
     */
    public function setSsseed($ssseed)
    {
        $this->ssseed = $ssseed;
    }

    /**
     * Get ssseed
     *
     * @return string 
     */
    public function getSsseed()
    {
        return $this->ssseed;
    }

    /**
     * Get idtarea
     *
     * @return integer 
     */
    public function getIdtarea()
    {
        return $this->idtarea;
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
     * Set fechainicio
     *
     * @param date $fechainicio
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    }

    /**
     * Get fechainicio
     *
     * @return date 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
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

    /**
     * Set tipotarea
     *
     * @param Amcontrol\AmcontrolBundle\Entity\TiposTarea $tipotarea
     */
    public function setTipotarea(\Amcontrol\AmcontrolBundle\Entity\TiposTarea $tipotarea)
    {
        $this->tipotarea = $tipotarea;
    }

    /**
     * Get tipotarea
     *
     * @return Amcontrol\AmcontrolBundle\Entity\TiposTarea 
     */
    public function getTipotarea()
    {
        return $this->tipotarea;
    }
}