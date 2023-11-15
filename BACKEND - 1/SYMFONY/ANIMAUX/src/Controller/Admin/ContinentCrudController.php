<?php

namespace App\Controller\Admin;

use App\Entity\Continent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContinentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Continent::class;
    }

    /*
public function configureFields(string $pageName): iterable
{
return [
TextField::new('title'),
TextEditorField::new('description'),
];
}
 */
}
