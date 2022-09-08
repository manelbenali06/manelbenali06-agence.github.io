<?php

namespace App\Form;

use App\Entity\Maison;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Image;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MaisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title', TextType::class, [ //importer la classe symfony-component..
            'label' => 'Titre',
            'attr' => [
                'placeholder' => 'Ex.:Jolie maison de compagne'
            ]
        ])
           
            ->add('description',TextareaType::class, [
                'attr' => [
                'placeholder' => 'Ex.: Maison de compagne en bordure de rivière avec grand jardin...'
            ]
            ])

            ->add('surface', IntegerType::class, [
                'label' => 'Superficie (m)',
                'attr' => [
                    'placeholder' => 'Ex.: 123',
                    'min' => 0
                ]
            ])

            ->add('rooms', IntegerType::class, [
                'label' => 'Pièces',
                'attr' => [
                    'placeholer' => 'Ex.: 8',
                    'min' => 0
                ]
            ])

            ->add('bedrooms', IntegerType::class, [
                'label' => 'Chambres',
                'attr' => [
                    'placeholder' => 'Ex.: 4',
                    'min' => 0
                ]
            ])

            ->add('price', IntegerType::class, [
                'label' => 'Prix',
                 'attr' => [
                    'placeholder' => 'Ex.: 123 456',
                    'min' => 0
                ]
            ])

            ->add('img1', FileType::class, [
                'required' => false,
                'label' => 'Image principale',
                'mapped' => false,
                'help' => 'png, jpg, ,jpeg ou jp2 - 1 Mo maximum',
                'constraints' => [
                    new Image([
                        'maxSize' => '1024K',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                            'image/jp2',
                        ],
                        'mimeTypesMessage' => 'Merci de séléctionner une image au format PNG, JPEG, ou JP2'
                    ])
                ]

            ])

            ->add('img2', FileType::class, [
                'required' => false,
                'label' => 'Image secondaire',
                'mapped' => false,
                'help' => 'png, jpg, ,jpeg ou jp2 - 1 Mo maximum',
                'constraints' => [
                    new Image([ 
                        'maxSize' => '1024K',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                            'image/jp2',
                        ],
                        'mimeTypesMessage' => 'Merci de séléctionner une image au format PNG, JPEG, ou JP2'
                    ])
                ]

            ])

            ->add('valider', SubmitType::class) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maison::class,
        ]);
    }
}
