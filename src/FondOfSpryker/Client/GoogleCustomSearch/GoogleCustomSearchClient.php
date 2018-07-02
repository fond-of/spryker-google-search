<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Spryker\Client\Kernel\AbstractClient;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;

/**
 * Class GoogleCustomSearchClient
 * @package FondOfSpryker\Client\GoogleCustomSearch
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 */
class GoogleCustomSearchClient extends AbstractClient implements GoogleCustomSeachClientInterface
{
    /**
     * @param GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     */
    public function search(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer)
    {
        $googleCustomSearchClient = $this
            ->getFactory()
            ->createGoogleCustomSearchApiClient();

        $result = $googleCustomSearchClient->search($googleCustomSearchRequestTransfer->getSearchString());

        return $result;
    }
}
