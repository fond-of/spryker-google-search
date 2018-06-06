<?php

namespace FondOfSpryker\Client\GoogleCustomSearch\Zed;

use FondOfSpryker\Client\GoogleCustomSearch\Zed\GoogleCustomSearchStubInterface;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Client\ZedRequest\Stub\ZedRequestStub;
use Spryker\Client\ZedRequest\ZedRequestClient;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

class GoogleCustomSearchStub extends ZedRequestStub implements GoogleCustomSearchStubInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClient
     */
    protected $zedRequestClient;

    /**
     * GoogleCustomSearchStub constructor.
     * @param ZedRequestClient $zedRequestClient
     */
    public function __construct(ZedRequestClient $zedRequestClient): void
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @param GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     * @return TransferInterface
     */
    public function search(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer): TransferInterface
    {
        return $this->zedRequestClient->call(
            '/google-custom-search/search',
            $googleCustomSearchRequestTransfer
        );
    }
}
