<?php

namespace TestLab\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => 'Name:',
                'attr' => array(
                    'class' => 'form-control'
                )))
            ->add('email', 'email', array(
                'label' => 'Email:',
                'attr' => array(
                    'class' => 'form-control'
                )))
            ->add('subject', 'text', array(
                'label' => 'Subject:',
                'attr' => array(
                    'class' => 'form-control'
                )))
            ->add('body', 'textarea', array(
                'label' => 'Body:',
                'attr' => array(
                    'class' => 'form-control'
                )))
        ;
    }

    /**
     * Returns name of form type
     * @return string
     */
    public function getName()
    {
        return 'website_contact';
    }
}
