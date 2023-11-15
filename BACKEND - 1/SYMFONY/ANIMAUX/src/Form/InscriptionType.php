<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscriptionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('civilite', ChoiceType::class, [
                'label' => 'Civilité',
                'attr' => ['class' => 'form-control form-control-sm'],
                'choices' => [
                    'Monsieur' => 'Monsieur',
                    'Madame' => 'Madame',
                    'Alien' => 'Alien',
                ],
            ])
            ->add('email')
            ->add('password')
            ->add('prenom')
            ->add('nom')
            ->add('age')
            ->add('telephone')
            ->add('photo')
            ->add('roles', ChoiceType::class, [
                'label' => 'Roles',
                'attr' => ['class' => 'form-control', 'style' => 'margin:5px 0;'],
                'choices' => [
                    'ADMIN ' => 'ROLE_ADMIN',
                    'MEMBRE ' => 'ROLE_MEMBRE',
                    'VISITEUR ' => 'ROLE_VISITEUR',
                ],
                'multiple' => true,
                'expanded' => true, // Pour afficher les rôles en tant que cases à cocher
                'required' => true,
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
