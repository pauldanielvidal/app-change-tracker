<?php

namespace AppChangeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChangeLogType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add('version')
            ->add('dateEntered')
            ->add('dateOfDeployment')
            ->add('comments')
            ->add('servicenowTicketRef')
            ->add('status')
            ->add('application')
            ->add('environment')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppChangeBundle\Entity\ChangeLog'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appchangebundle_changelog';
    }
}
