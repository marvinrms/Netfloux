<?php

namespace App\Controller\Admin;

use App\Entity\ChoiceUser;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ChoiceUserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ChoiceUser::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            yield AssociationField::new('user')->autocomplete(),
            yield AssociationField::new('content')->autocomplete(),
            
        ];
    }
    
}
