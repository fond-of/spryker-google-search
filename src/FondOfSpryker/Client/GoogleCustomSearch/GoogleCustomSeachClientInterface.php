<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Generated\Shared\Transfer\GoogleCustomSearchrequestTransfer;
use Generated\Shared\Transfer\GoogleCustomSearchResponseTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface GoogleCustomSeachClientInterface
{
    /**
     * @param GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     */
    public function search(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer);
}