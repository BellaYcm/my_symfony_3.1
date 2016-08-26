<?php

namespace SunKe\TestBundle\Form\Demo;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Table_blog_msgType extends AbstractType
{

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SunKe\TestBundle\Entity\Demo\Table_blog_msg'
        ));
    }
}
