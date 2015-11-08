<?php

namespace AppChangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ServiceNowConfigType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('businessService')
            ->add('category')
            ->add('subcategory')
            ->add('configurationItem')
            ->add('application')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppChangeBundle\Entity\ServiceNowConfig'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appchangebundle_servicenowconfig';
    }
}
