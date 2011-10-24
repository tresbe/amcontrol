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
	* @ORM\OneToMany(targetEntity="HistoricoEstado",
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
}
