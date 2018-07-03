<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * Class GoogleCustomSearchClient
 * @package FondOfSpryker\Client\GoogleCustomSearch
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 */
class GoogleCustomSearchClient extends AbstractClient implements GoogleCustomSeachClientInterface
{
    /**
     * @param string $apiKey
     * @param string $cxKey
     * @param array $config
     * @param \Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     *
     * @return array|\JMS\Serializer\scalar|mixed|null|object
     */
    public function search(
        string $apiKey,
        string $cxKey,
        array $config,
        GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
    ) {
        $result = null;
        $googleCustomSearchClient = $this
            ->getFactory()
            ->createGoogleCustomSearchApiClient($apiKey, $cxKey, $config);

        $result = $googleCustomSearchClient->search($googleCustomSearchRequestTransfer->getSearchString());

        return $result;
    }
}
