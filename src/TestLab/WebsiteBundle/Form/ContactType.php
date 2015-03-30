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
            ->add('name', 'text', [
                'label' => 'Name:',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Name is required']),
                    new Assert\Length(['min' => 3, 'max' => 50]),
                    new Assert\Regex([
                        'pattern'     => '/^[a-zA-Z0-9_]+$/i',
                        'message' => 'Your name can contain numbers, letters and _'
                    ])
                ],
            ])
            ->add('email', 'email', [
                'label' => 'Email:',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Email is required']),
                    new Assert\Email([
                        'message' => 'The email {{ value }} is not a valid email.',
                        'checkMX' => true,
                    ])
                ],
            ])
            ->add('subject', 'text', [
                'label' => 'Subject:',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Subject is required']),
                    new Assert\Length(['min' => 3, 'max' => 200]),
                ],
            ])
            ->add('body', 'textarea', [
                'label' => 'Body:',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Body is required']),
                    new Assert\Length(['min' => 5, 'max' => 1000]),
                ],
            ])
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
