<?php

namespace App\Form;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Espece;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnimalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('image')
            ->add('nom_latin')
            ->add('espece', EntityType::class, // ou 'class' => 'App\Entity\Espece' qui permet de ne pas utiliser le USE
                array('class' => Espece::class,
                    'choice_label' => 'nom',
                    'label' => 'Sélectionner l\'Espèce: ',
                    'multiple' => false))
            ->add('continents', EntityType::class,
                array('class' => Continent::class,
                    'label' => 'Sélectionner le Continent: ',
                    'choice_label' => 'nom',
                    'multiple' => true,
                    'by_reference' => false)); // permet d'ajouter un continent à un animal
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Animal::class,
        ]);
    }
}
