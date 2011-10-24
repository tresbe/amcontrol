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
	protected $id;
	
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
}
