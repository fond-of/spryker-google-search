<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider;

use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;
use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class GoogleCustomSearchControllerProvider extends AbstractYvesControllerProvider
{
    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app): void
    {
        $this
            ->addFormRoute()
            ->addResultRoute();
    }

    /**
     * @return \FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider\GoogleCustomSearchControllerProvider
     */
    protected function addFormRoute(): self
    {
        $this->createController(
            '{form}',
            GoogleCustomSearchConstants::ROUTE_FORM_NAME,
            GoogleCustomSearchConstants::BUNDLE,
            'Search',
            'form'
        )
        ->assert('form',$this->getAllowedLocalesPattern() . 'form|form')
        ->value('form','/de/form')
        ->method('GET');

        return $this;
    }

    /**
     * @return \FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider\GoogleCustomSearchControllerProvider
     */
    protected function addResultRoute(): self
    {
        $this->createController(
            '{search}',
            GoogleCustomSearchConstants::ROUTE_SEARCH_NAME,
            GoogleCustomSearchConstants::BUNDLE,
            'Search',
            'result'
        )
        ->assert('search', $this->getAllowedLocalesPattern() . 'search|search')
        ->value('search', '/de/search');

        return $this;
    }
}
