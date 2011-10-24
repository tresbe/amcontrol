<?php

namespace Amcontrol\AmcontrolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Table(name="estados")
* @ORM\Entity
**/
class Estados {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	protected $id;
	
	/**
	* @ORM\Column(type="text")
	*/
	protected $descripcion;

	/**
	* @ORM\OneToMany(targetEntity="HistoricoEstados",
	* mappedBy="estado")
	*/
	protected $historicosestados;


    /**
     * Get idestado
     *
     * @return integer 
     */
    public function getIdestado()
    {
        return $this->idestado;
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
    public function __construct()
    {
        $this->historicosestados = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add historicosestados
     *
     * @param Amcontrol\AmcontrolBundle\Entity\HistoricoEstado $historicosestados
     */
    public function addHistoricoEstado(\Amcontrol\AmcontrolBundle\Entity\HistoricoEstado $historicosestados)
    {
        $this->historicosestados[] = $historicosestados;
    }

    /**
     * Get historicosestados
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getHistoricosestados()
    {
        return $this->historicosestados;
    }

    /**
     * Add historicosestados
     *
     * @param Amcontrol\AmcontrolBundle\Entity\HistoricoEstados $historicosestados
     */
    public function addHistoricoEstados(\Amcontrol\AmcontrolBundle\Entity\HistoricoEstados $historicosestados)
    {
        $this->historicosestados[] = $historicosestados;
    }
}