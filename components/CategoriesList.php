<?php namespace DevINX\ExoticProducts\Components;

use Cms\Classes\ComponentBase;

class CategoriesList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Liste des catégories',
            'description' => 'Affiche la liste des catégories'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

}
