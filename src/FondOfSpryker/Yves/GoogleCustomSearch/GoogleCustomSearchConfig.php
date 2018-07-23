<?php

namespace FondOfSpryker\Yves\GoogleCustomSearch;

use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;
use Spryker\Yves\Kernel\AbstractBundleConfig;

class GoogleCustomSearchConfig extends AbstractBundleConfig
{
    /**
     * @var string
     */
    private $locale = GoogleCustomSearchConstants::CONFIG_DEFAULT_LOCALE;

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->locale = $locale;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->get(GoogleCustomSearchConstants::API_KEY);
    }

    /**
     * @return string
     */
    public function getCxKey(): string
    {
        return $this->get(
            GoogleCustomSearchConstants::CX_KEY . '_' . $this->getLocale(),
            $this->get(GoogleCustomSearchConstants::CX_KEY, 'NO_CX_KEY_FOUND')
        );
    }

    /**
     * @return array
     */
    public function getClientConfig(): array
    {
        return [
            'base_uri' => $this->getClientConfigUrl(),
            'timeout' => $this->getClientConfigTimeout(),
        ];
    }

    /**
     * @return string
     */
    public function getClientConfigUrl(): string
    {
        return $this->get(GoogleCustomSearchConstants::CONFIG_URL, GoogleCustomSearchConstants::CONFIG_URL_DEFAULT);
    }

    /**
     * @return int
     */
    public function getClientConfigTimeout(): int
    {
        return $this->get(GoogleCustomSearchConstants::CONFIG_TIMEOUT, GoogleCustomSearchConstants::CONFIG_TIMEOUT_DEFAULT);
    }

    /**
     * @return int
     */
    public function getItemsPerPage(): int
    {
        return $this->get(GoogleCustomSearchConstants::RESULT_ITEMS_PER_PAGE, 10);
    }
}
