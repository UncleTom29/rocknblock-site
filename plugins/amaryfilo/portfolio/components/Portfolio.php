<?php namespace Amaryfilo\Portfolio\Components;

use Cms\Classes\ComponentBase;
use Amaryfilo\Portfolio\Models\Portfolio as MPortfolio;

class Portfolio extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Portfolio',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function getPortfolioContracts() {
        return MPortfolio::orderBy('id', 'desc')->where('type', 'contracts')->get();
    }

    public function getPortfolioWeb() {
        return MPortfolio::orderBy('id', 'desc')->where('type', 'webMobile')->get();
    }
}
