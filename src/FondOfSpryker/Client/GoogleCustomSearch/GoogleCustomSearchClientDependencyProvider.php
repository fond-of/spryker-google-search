<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Spryker\Client\Kernel\AbstractDependencyProvider;
use Spryker\Client\Kernel\Container;

class GoogleCustomSearchClientDependencyProvider extends AbstractDependencyProvider
{
    const CLIENT_ZED_REQUEST = 'CLIENT_ZED_REQUEST';

    public function provideServiceLayerDependencies(Container $container): Container
    {
        $container = $this->addZedRequestClient($container);

        return $container;
    }

    /**
     * @param Container $container
     * @return Container
     */
    public function addZedRequestClient(Container $container): Container
    {
        $container[static::CLIENT_ZED_REQUEST] = function (Container $container) {
            return $container->getLocator()->zedRequest()->client();
        };

        return $container;
    }
}
