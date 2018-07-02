<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider;

use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;
use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;


class GoogleCustomSearchControllerProvider extends AbstractYvesControllerProvider
{
    const ROUTE_SEARCH = '/search';
    const ROUTE_SEARCH_NAME = 'search';

    protected function defineControllers(Application $app): void
    {
        $this->addSearchRoute();
    }

    protected function addSearchRoute(): self
    {
        $allowedLocalesPattern = $this->getAllowedLocalesPattern();

        $this->createController(
            '/' . self::ROUTE_SEARCH,
            self::ROUTE_SEARCH_NAME,
            GoogleCustomSearchConstants::BUNDLE,
            'Index',
            'index'
        );
        //->method('GET|POST')
        //->assert(self::ROUTE_SEARCH, $allowedLocalesPattern . self::ROUTE_SEARCH . '|' . self::ROUTE_SEARCH);

        return $this;
    }
}
