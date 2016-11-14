<?php namespace DevINX\ExoticProducts;

use Backend;
use System\Classes\PluginBase;

/**
 * ExoticProducts Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ExoticProducts',
            'description' => 'No description provided yet...',
            'author'      => 'DevINX',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'DevINX\ExoticProducts\Components\CategoriesList' => 'categoriesList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'devinx.exoticproducts.some_permission' => [
                'tab' => 'ExoticProducts',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
      return [
            'exoticproducts' => [
                'label'       => 'Production Exotic',
                'url'         => Backend::url('devinx/exoticproducts/products'),
                'icon'        => 'icon-building-o',
                'order'       => 500,
                'sideMenu'    => [
                  'products'  => [
                    'label'   => 'Produits',
                    'url'     => Backend::url('devinx/exoticproducts/products'),
                    'icon'    => 'icon-file-o',
                  ],
                  'categories'=> [
                    'label'   => 'Catégories',
                    'url'     => Backend::url('devinx/exoticproducts/categories'),
                    'icon'    => 'icon-files-o',
                  ]
                ]
            ],
        ];
    }

}
