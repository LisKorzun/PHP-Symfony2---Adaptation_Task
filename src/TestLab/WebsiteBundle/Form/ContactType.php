<?php

namespace TestLab\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints as Assert;

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
                ),
                'constraints' => array(
                    new Assert\NotBlank(array('message' => 'Name is required')),
                    new Assert\Length(array('min' => 3, 'max' => 50)),
                    new Assert\Regex(array(
                        'pattern'     => '/^[a-zA-Z0-9_]+$/i',
                        'message' => 'Your name can contain numbers, letters and _'
                    ))
                ),
            ))
            ->add('email', 'email', array(
                'label' => 'Email:',
                'attr' => array(
                    'class' => 'form-control'
                ),
                'constraints' => array(
                    new Assert\NotBlank(array('message' => 'Email is required')),
                    new Assert\Email(array(
                        'message' => 'The email {{ value }} is not a valid email.',
                        'checkMX' => true,
                    ))
                ),
            ))
            ->add('subject', 'text', array(
                'label' => 'Subject:',
                'attr' => array(
                    'class' => 'form-control'
                ),
                'constraints' => array(
                    new Assert\NotBlank(array('message' => 'Subject is required')),
                    new Assert\Length(array('min' => 3, 'max' => 200)),
                ),
            ))
            ->add('body', 'textarea', array(
                'label' => 'Body:',
                'attr' => array(
                    'class' => 'form-control'
                ),
                'constraints' => array(
                    new Assert\NotBlank(array('message' => 'Body is required')),
                    new Assert\Length(array('min' => 5, 'max' => 1000)),
                ),
            ))
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
