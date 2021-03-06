<?php

/**
 * @author Yann-Eric <yann-eric@live.fr>
 */
namespace DW\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RoleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('desciption')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DW\UserBundle\Entity\Role'
        ));
    }

    public function getName()
    {
        return 'dw_userbundle_roletype';
    }
}
