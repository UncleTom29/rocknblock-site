<?php namespace Amaryfilo\Portfolio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Portfolio Back-end Controller
 */
class Portfolio extends Controller
{
    /**
     * @var array Behaviors that are implemented by this controller.
     */
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Amaryfilo.Portfolio', 'portfolio', 'portfolio');
    }
}
