<?php

namespace FondOfSpryker\Zed\GoogleCustomSearch\Communication\Controller;

use Spryker\Shared\Kernel\Transfer\TransferInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;

class GatewayController extends AbstractGatewayController
{
    public function searchAction(GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer): TransferInterface
    {
        return $googleCustomSearchRequestTransfer;
    }
}
