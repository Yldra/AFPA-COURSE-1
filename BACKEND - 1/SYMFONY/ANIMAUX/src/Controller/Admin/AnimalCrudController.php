<?php

namespace App\Controller\Admin;

use App\Entity\Animal;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AnimalCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Animal::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new ('nom'),
            TextField::new ('description'),
            $img = ImageField::new ('image')
                ->setBasePath('pictures')
                ->setUploadDir('public/pictures')
                ->setUploadedFileNamePattern('[name].[extension]')
                ->setRequired(false),
            TextField::new ('nom_latin'),
            AssociationField::new ('espece'),
        ];
    }

}
