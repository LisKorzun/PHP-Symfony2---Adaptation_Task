<?php

namespace TestLab\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', [
                'label' => 'Name:',
                'attr' => ['class' => 'form-control']
            ])
            ->add('email', 'email', [
                'label' => 'Email:',
                'attr' => ['class' => 'form-control']
            ])
            ->add('subject', 'text', [
                'label' => 'Subject:',
                'attr' => ['class' => 'form-control']
            ])
            ->add('body', 'textarea', [
                'label' => 'Body:',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    /**
     * Setting the data_class
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(['data_class' => 'TestLab\WebsiteBundle\Entity\Contact']);
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
