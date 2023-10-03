<?php

namespace App\Controller\Admin;

use App\Entity\Director;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;

class DirectorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Director::class;
    }


    public function configureFields(string $pageName): iterable
    {
    
            yield IdField::new('id')
                ->hideWhenCreating();
            yield Field::new('firstname');
            yield Field::new('lastname');
            
        
    }
}
