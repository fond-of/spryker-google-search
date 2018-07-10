<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchConfig;
use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;

interface GoogleCustomSeachClientInterface
{
    /**
     * @param \FondOfSpryker\Yves\GoogleCustomSearch\GoogleCustomSearchConfig $config
     * @param \Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     * @param int $start
     *
     * @return mixed
     */
    public function search(
        GoogleCustomSearchConfig $config,
        GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer,
        int $start
    );
}
