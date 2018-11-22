<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfPHP\GoogleCustomSearch\Client;
use Spryker\Client\Kernel\AbstractFactory;
use Spryker\Shared\Kernel\Store;

/**
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchConfig getConfig()
 */
class GoogleCustomSearchFactory extends AbstractFactory
{
    /**
     * @return \FondOfPHP\GoogleCustomSearch\Client
     */
    public function createGoogleCustomSearchClient(): Client
    {
        $apiKey = $this->getConfig()->getApiKey();
        $cxKey = $this->getConfig()->getCxKey(Store::getInstance()->getCurrentLocale());
        $clientConfig = $this->getConfig()->getClientConfig();

        return new Client($apiKey, $cxKey, $clientConfig);
    }
}
