<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfPHP\GoogleCustomSearch\Client as GoogleCustomSearchApiClient;
use Spryker\Client\Kernel\AbstractFactory;

class GoogleCustomSearchFactory extends AbstractFactory
{
    /**
     * @param string $apiKey
     * @param string $cxKey
     * @param array $config
     *
     * @return \FondOfPHP\GoogleCustomSearch\Client
     */
    public function createGoogleCustomSearchApiClient(string $apiKey, string $cxKey, array $config): GoogleCustomSearchApiClient
    {
        return new GoogleCustomSearchApiClient($apiKey, $cxKey, $config);
    }
}
