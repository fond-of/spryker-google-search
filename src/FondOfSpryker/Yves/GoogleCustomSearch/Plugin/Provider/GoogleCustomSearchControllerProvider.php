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
            GoogleCustomSearchConstants::ROUTE_FORM_URL,
            GoogleCustomSearchConstants::ROUTE_FORM_NAME,
            GoogleCustomSearchConstants::BUNDLE,
            'Search',
            'form'
        )
        ->method('GET');

        return $this;
    }

    /**
     * @return \FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider\GoogleCustomSearchControllerProvider
     */
    protected function addResultRoute(): self
    {
        $this->createController(
            GoogleCustomSearchConstants::ROUTE_SEARCH_SLUG,
            GoogleCustomSearchConstants::ROUTE_SEARCH_NAME,
            GoogleCustomSearchConstants::BUNDLE,
            'Search',
            'result'
        )
        ->assert(
            GoogleCustomSearchConstants::ROUTE_SEARCH_URL_VARIABLE,
            $this->getAllowedLocalesPattern() . GoogleCustomSearchConstants::ROUTE_SEARCH_URL_VARIABLE . '|' . GoogleCustomSearchConstants::ROUTE_SEARCH_URL_VARIABLE
        )
        ->value(
            GoogleCustomSearchConstants::ROUTE_SEARCH_URL_VARIABLE,
            '/de/' . GoogleCustomSearchConstants::ROUTE_SEARCH_URL_VARIABLE
        );

        return $this;
    }
}
