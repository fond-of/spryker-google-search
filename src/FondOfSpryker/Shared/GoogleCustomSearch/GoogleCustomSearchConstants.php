<?php

namespace FondOfSpryker\Shared\GoogleCustomSearch;

interface GoogleCustomSearchConstants
{
    const BUNDLE = 'GoogleCustomSearch';

    const ROUTE_FORM_NAME = 'google-search-form';
    const ROUTE_SEARCH_NAME = 'google-search-results';

    const API_KEY = 'GOOGLE_CUSTOM_SEARCH_API_KEY';
    const CX_KEY = 'GOOGLE_CUSTOM_SEARCH_CX_KEY';

    const CONFIG_URL = 'GOOGLE_CUSTOM_SEARCH_CONFIG_URL';
    const CONFIG_URL_DEFAULT = 'https://www.googleapis.com/customsearch/v1';
    const CONFIG_TIMEOUT = 'GOOGLE_CUSTOM_SEARCH_CONFIG_TIMEOUT';
    const CONFIG_TIMEOUT_DEFAULT = 2.0;
    const CONFIG_DEFAULT_LOCALE = 'de_DE';

    const RESULT_ITEMS_PER_PAGE = 'RESULT_ITEMS_PER_PAGE';
}
