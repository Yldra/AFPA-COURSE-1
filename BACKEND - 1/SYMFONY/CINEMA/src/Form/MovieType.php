<?php

namespace App\Form;

use App\Entity\Movie;
use App\Entity\Actor;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\Factory\Cache\ChoiceLoader;
use Symfony\Component\Form\FormBuilderInterface;

 
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('description')
            ->add('affiche')
            ->add( 'acteurs' , EntityType::class , [
                'mapped' => true,
                'multiple' => true,
                'class' => Actor::class,
                'choice_label' => 'nom',
                'label' => 'Choisir actor'      
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
