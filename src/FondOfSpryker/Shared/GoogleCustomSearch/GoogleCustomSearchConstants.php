<?php

namespace FondOfSpryker\Shared\GoogleCustomSearch;

interface GoogleCustomSearchConstants
{
    public const API_KEY = 'GOOGLE_CUSTOM_SEARCH_API_KEY';
    public const CX_KEY = 'GOOGLE_CUSTOM_SEARCH_CX_KEY';
    public const GOOGLE_CUSTOM_SEARCH_LOCALIZED_CONFIGS = 'GOOGLE_CUSTOM_SEARCH_LOCALIZED_CONFIGS';
    public const CONFIG_URL = 'GOOGLE_CUSTOM_SEARCH_CONFIG_URL';
    public const CONFIG_URL_DEFAULT = 'https://www.googleapis.com/customsearch/v1';
    public const TIMEOUT = 'GOOGLE_CUSTOM_SEARCH_CONFIG_TIMEOUT';
    public const TIMEOUT_DEFAULT = 2.0;
    public const RESULT_ITEMS_PER_PAGE = 'RESULT_ITEMS_PER_PAGE';
    public const EXCLUDE_TERMS = 'EXCLUDE_TERMS';
}
