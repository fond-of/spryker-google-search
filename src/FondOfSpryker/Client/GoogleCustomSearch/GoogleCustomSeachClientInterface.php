<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer\GoogleCustomSearchRequestTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface GoogleCustomSeachClientInterface
{
    /**
     * @param GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     * @return TransferInterface
     */
    public function search(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer): TransferInterface;
}