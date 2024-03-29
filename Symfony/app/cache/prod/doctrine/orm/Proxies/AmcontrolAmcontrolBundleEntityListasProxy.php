<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class AmcontrolAmcontrolBundleEntityListasProxy extends \Amcontrol\AmcontrolBundle\Entity\Listas implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setMu($mu)
    {
        $this->__load();
        return parent::setMu($mu);
    }

    public function getMu()
    {
        $this->__load();
        return parent::getMu();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setActividad($actividad)
    {
        $this->__load();
        return parent::setActividad($actividad);
    }

    public function getActividad()
    {
        $this->__load();
        return parent::getActividad();
    }

    public function setComentarios($comentarios)
    {
        $this->__load();
        return parent::setComentarios($comentarios);
    }

    public function getComentarios()
    {
        $this->__load();
        return parent::getComentarios();
    }

    public function setTipo($tipo)
    {
        $this->__load();
        return parent::setTipo($tipo);
    }

    public function getTipo()
    {
        $this->__load();
        return parent::getTipo();
    }

    public function setNivel($nivel)
    {
        $this->__load();
        return parent::setNivel($nivel);
    }

    public function getNivel()
    {
        $this->__load();
        return parent::getNivel();
    }

    public function setSd($sd)
    {
        $this->__load();
        return parent::setSd($sd);
    }

    public function getSd()
    {
        $this->__load();
        return parent::getSd();
    }

    public function setResponsable($responsable)
    {
        $this->__load();
        return parent::setResponsable($responsable);
    }

    public function getResponsable()
    {
        $this->__load();
        return parent::getResponsable();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'mu', 'descripcion', 'actividad', 'comentarios', 'sd', 'tipo', 'nivel', 'responsable');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}