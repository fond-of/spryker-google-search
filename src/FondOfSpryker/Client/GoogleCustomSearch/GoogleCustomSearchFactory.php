<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Spryker\Client\Kernel\AbstractFactory;
use FondOfPHP\GoogleCustomSearch\Client as GoogleCustomSearchApiClient;

class GoogleCustomSearchFactory extends AbstractFactory
{
    public function createGoogleCustomSearchApiClient()
    {
        return new GoogleCustomSearchApiClient(
            'apiKey',
            'cx'
        );
    }
}
