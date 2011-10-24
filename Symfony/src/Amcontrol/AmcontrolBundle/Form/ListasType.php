<?php

namespace Amcontrol\AmcontrolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ListasType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('mu')
            ->add('descripcion')
            ->add('actividad')
            ->add('comentarios')
            ->add('sd')
            ->add('tipo')
            ->add('nivel')
            ->add('responsable')
        ;
    }

    public function getName()
    {
        return 'amcontrol_amcontrolbundle_listastype';
    }
}
