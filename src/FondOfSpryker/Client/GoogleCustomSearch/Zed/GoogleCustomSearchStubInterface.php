<?php

namespace FondOfSpryker\Client\GoogleCustomSearch\Zed;

use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;
use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface GoogleCustomSearchStubInterface
{
    public function search(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer): TransferInterface;
}