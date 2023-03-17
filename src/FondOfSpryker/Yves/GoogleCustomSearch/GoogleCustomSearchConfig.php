<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch;

use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;
use Spryker\Yves\Kernel\AbstractBundleConfig;

class GoogleCustomSearchConfig extends AbstractBundleConfig
{
    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->get(GoogleCustomSearchConstants::RESULT_ITEMS_PER_PAGE, 10);
    }

    /**
     * @return string
     */
    public function getExcludeTerms(): string
    {
        return $this->get(GoogleCustomSearchConstants::EXCLUDE_TERMS, '');
    }
}
