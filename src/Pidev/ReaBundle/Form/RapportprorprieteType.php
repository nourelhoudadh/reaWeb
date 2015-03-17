<?php

namespace Pidev\ReaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RapportprorprieteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenue')
            ->add('idoffre')
            ->add('idrapporteur')
            ->add('idrapport')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pidev\ReaBundle\Entity\Rapportprorpriete'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pidev_reabundle_rapportprorpriete';
    }
}
