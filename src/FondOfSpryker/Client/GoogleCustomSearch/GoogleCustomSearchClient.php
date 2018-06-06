<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Spryker\Client\Kernel\AbstractClient;
use FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSeachClientInterface;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

/**
 * Class GoogleCustomSearchClient
 * @package FondOfSpryker\Client\GoogleCustomSearch
 * @method \FondOfSpryker\Client\GoogleCustomSearch\GoogleCustomSeachClientFactory getFactory()
 */
class GoogleCustomSearchClient extends AbstractClient implements GoogleCustomSeachClientInterface
{
    /**
     * @return Zed\GoogleCustomSearchStub
     */
    protected function getZedStub()
    {
        return $this->getFactory()->createZedStub();
    }

    /**
     * @param GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     * @return TransferInterface
     */
    public function search(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer): TransferInterface
    {
        $response = $this
            ->getFactory()
            ->createZedStub()
            ->search($googleCustomSearchRequestTransfer);

        return $response;
    }
}
