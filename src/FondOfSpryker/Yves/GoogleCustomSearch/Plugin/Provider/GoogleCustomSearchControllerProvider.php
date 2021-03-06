<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider;

use Silex\Application;
use SprykerShop\Yves\ShopApplication\Plugin\Provider\AbstractYvesControllerProvider;

class GoogleCustomSearchControllerProvider extends AbstractYvesControllerProvider
{
    public const ROUTE_GOOGLE_CUSTOM_SEARCH_FORM = 'gcs/form';
    public const ROUTE_GOOGLE_CUSTOM_SEARCH_RESULT = 'gcs/result';

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    protected function defineControllers(Application $app): void
    {
        $this->addFormRoute()
            ->addResultRoute();
    }

    /**
     * @return \FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider\GoogleCustomSearchControllerProvider
     */
    protected function addFormRoute(): self
    {
        $this->createController('{gcs}/form', static::ROUTE_GOOGLE_CUSTOM_SEARCH_FORM, 'GoogleCustomSearch', 'Search', 'form')
            ->assert('gcs', $this->getAllowedLocalesPattern() . 'gcs|gcs')
            ->value('gcs', 'gcs')
            ->method('GET');

        return $this;
    }

    /**
     * @return \FondOfSpryker\Yves\GoogleCustomSearch\Plugin\Provider\GoogleCustomSearchControllerProvider
     */
    protected function addResultRoute(): self
    {
        $this->createController('{gcs}/result', static::ROUTE_GOOGLE_CUSTOM_SEARCH_RESULT, 'GoogleCustomSearch', 'Search', 'result')
            ->assert('gcs', $this->getAllowedLocalesPattern() . 'gcs|gcs')
            ->value('gcs', 'gcs');

        return $this;
    }
}
