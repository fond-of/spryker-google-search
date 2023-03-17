<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfPHP\GoogleCustomSearch\Result;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Client\Kernel\AbstractClient;

/**
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSearchFactory getFactory()
 */
class GoogleCustomSearchClient extends AbstractClient implements GoogleCustomSearchClientInterface
{
    /**
     * @var \FondOfPHP\GoogleCustomSearch\Client
     */
    protected $client;

    public function __construct()
    {
        $this->client = $this->getFactory()->createGoogleCustomSearchClient();
    }

    /**
     * @param \Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     * @param int $start
     * @param int $itemsPerPage
     *
     * @return \FondOfPHP\GoogleCustomSearch\Result
     */
    public function search(
        GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer,
        int $start,
        int $itemsPerPage
    ): Result {
        return $this->client->search($googleCustomSearchRequestTransfer->getSearchString(), $start, $itemsPerPage, $googleCustomSearchRequestTransfer->getExcludeTerms());
    }
}
