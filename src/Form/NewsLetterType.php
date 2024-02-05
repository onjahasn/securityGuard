<?php

namespace App\Form;

use App\Entity\Newsletter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class NewsLetterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => 'Email',
                    'class' => 'form-control mb-3'
                ],
                'constraints' => [
                    new NotNull([
                        'message' => 'Veuillez saisir votre email'
                    ]),
                    new Length([
                        'min' => 2,
                        'minMessage' => 'Votre email doit contenir au moins {{ 2 }} caractères',
                        'max' => 255,
                        'maxMessage' => 'Votre email doit contenir au maximum {{ 255 }} caractères'
                    ])
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'S\'abonner',
                'attr' => [
                    'class' => 'btn btn-secondary bg-black'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Newsletter::class,
        ]);
    }
}
