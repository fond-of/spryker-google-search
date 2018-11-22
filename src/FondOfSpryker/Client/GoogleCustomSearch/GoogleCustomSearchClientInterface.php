<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfPHP\GoogleCustomSearch\Result;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;

interface GoogleCustomSearchClientInterface
{
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
    ): Result;
}
