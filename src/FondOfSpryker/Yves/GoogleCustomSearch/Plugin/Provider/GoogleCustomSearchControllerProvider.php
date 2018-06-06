<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider;

use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;
use Silex\Application;
use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;


class GoogleCustomSearchControllerProvider extends AbstractYvesControllerProvider
{
    const ROUTE_SEARCH = 'search';

    public function defineControllers(Application $app)
    {
        $allowedLocalesPattern = $this->getAllowedLocalesPattern();

        $this->createController(
            self::ROUTE_SEARCH,
            self::ROUTE_SEARCH,
            GoogleCustomSearchConstants::BUNDLE,
            'Index',
            'search'
        )
        ->method('GET|POST')
        ->assert(self::ROUTE_SEARCH, $allowedLocalesPattern . self::ROUTE_SEARCH . '|' . self::ROUTE_SEARCH);
    }
}
