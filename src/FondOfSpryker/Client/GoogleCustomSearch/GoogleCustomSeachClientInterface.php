<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer;

interface GoogleCustomSeachClientInterface
{
    /**
     * @param string $apiKey
     * @param string $cxKey
     * @param array $config
     * @param \Generated\Shared\Transfer\GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
     *
     * @return mixed
     */
    public function search(
        string $apiKey,
        string $cxKey,
        array $config,
        GoogleCustomSearchRequestTransfer $googleCustomSearchRequestTransfer
    );
}
