<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use App\Entity\Content;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class ContentCrudController extends AbstractCrudController

{
    public static function getEntityFqcn(): string
    {
        return Content::class;
    }

    public function configureFields(string $pageName, ): iterable
    {
     
        
        yield Field::new('name');
        yield TextEditorField::new('description');
        yield AssociationField::new('categorie')->autocomplete();
        yield AssociationField::new('director')->autocomplete();
        yield DateField::new('releasedate');
        yield ImageField::new('image')
            ->setBasePath('uploads/images/')
            ->setUploadDir('/public/uploads/images/');
        yield ChoiceField::new('type')
        ->setChoices([
            'Movie' => 'Movie',
            'Serie' => 'Serie'
        ]);
    }
}
