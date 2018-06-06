<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Spryker\Client\Kernel\AbstractFactory;
use FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchClientDependencyProvider;
use FondOfSpryker\Client\GoogleCustomSearch\Zed\GoogleCustomSearchStub;

class GoogleCustomSeachClientFactory extends AbstractFactory
{
    /**
     * @return GoogleCustomSearchStub
     */
    public function createZedStub(): GoogleCustomSearchStub
    {
        return new GoogleCustomSearchStub($this->getZedRequestClient());
    }

    /**
     * @return mixed
     * @throws \Spryker\Client\Kernel\Exception\Container\ContainerKeyNotFoundException
     */
    public function getZedRequestClient()
    {
        return $this->getProvidedDependency(GoogleCustomSearchClientDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
