<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchConfig;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 */
class GoogleCustomSearchClient extends AbstractClient implements GoogleCustomSeachClientInterface
{
    /**
     * @param \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchConfig $config
     * @param \Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     * @param int $start
     *
     * @return array|\JMS\Serializer\scalar|mixed|null|object
     */
    public function search(
        GoogleCustomSearchConfig $config,
        GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer,
        int $start
    ) {
        $result = null;
        $googleCustomSearchClient = $this
            ->getFactory()
            ->createGoogleCustomSearchApiClient(
                $config->getApiKey(),
                $config->getCxKey(),
                $config->getClientConfig()
            );

        if ($start > 1) {
            $start = $start * $config->getItemsPerPage() - $config->getItemsPerPage() + 1;
        }

        $result = $googleCustomSearchClient->search(
            $googleCustomSearchRequestTransfer->getSearchString(),
            $start,
            $config->getItemsPerPage()
        );

        return $result;
    }
}
