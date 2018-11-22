<?php

namespace FondOfSpryker\Client\GoogleCustomSearch;

use FondOfSpryker\Shared\GoogleCustomSearch\GoogleCustomSearchConstants;
use Spryker\Client\Kernel\AbstractBundleConfig;

class GoogleCustomSearchConfig extends AbstractBundleConfig
{
    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->get(GoogleCustomSearchConstants::API_KEY);
    }

    /**
     * @param string $locale
     *
     * @return string
     */
    public function getCxKey(string $locale): string
    {
        return $this->getLocalized(
            GoogleCustomSearchConstants::CX_KEY,
            $locale,
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
        return $this->get(
            GoogleCustomSearchConstants::TIMEOUT,
            GoogleCustomSearchConstants::TIMEOUT_DEFAULT
        );
    }

    /**
     * @param string $key
     * @param string $locale
     * @param mixed $default
     *
     * @return mixed
     */
    protected function getLocalized(string $key, string $locale, $default = null)
    {
        $localizedConfigs = $this->get(GoogleCustomSearchConstants::GOOGLE_CUSTOM_SEARCH_LOCALIZED_CONFIGS, []);

        if (!\is_array($localizedConfigs) || empty($localizedConfigs)) {
            return $default;
        }

        if (!\array_key_exists($locale, $localizedConfigs) || !\is_array($localizedConfigs[$locale])) {
            return $default;
        }

        $configs = $localizedConfigs[$locale];

        if (!\array_key_exists($key, $configs)) {
            return $default;
        }

        return $configs[$key];
    }
}
