<?php namespace Amaryfilo\Portfolio;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * portfolio Plugin Information File
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
            'name'        => 'Портфолио',
            'description' => 'RnB портфолио',
            'author'      => 'amaryfilo',
            'icon'        => 'icon-database'
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
        // return []; // Remove this line to activate

        return [
            'Amaryfilo\Portfolio\Components\Portfolio' => 'portfolio',
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
            'amaryfilo.portfolio.some_permission' => [
                'tab' => 'portfolio',
                'label' => 'Some permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
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
        // return []; // Remove this line to activate

        return [
            'portfolio' => [
                'label'       => 'Portfolio',
                'url'         => Backend::url('amaryfilo/portfolio/portfolio'),
                'icon'        => 'icon-database',
                'permissions' => ['amaryfilo.portfolio.*'],
                'order'       => 500,
            ],
        ];
    }
}
