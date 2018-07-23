# fond-of-spryker/google-custom-search
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/fond-of-spryker/google-custom-search)

Implements Google Search into the Spryker Suite

## Install

```
composer require fond-of-spryker/google-custom-search
```

### Configuration

First, you should complete the configuration of the Google API in your configuration, e.g. under config/shared/config_default.php

```
$config[GoogleCustomSearchConstants::API_KEY] = 'YOUR_API_KEY';
$config[GoogleCustomSearchConstants::CX_KEY] = 'SEARCH_ENGINE_KEY';
$config[GoogleCustomSearchConstants::CONFIG_TIMEOUT] = 5.0;
$config[GoogleCustomSearchConstants::RESULT_ITEMS_PER_PAGE] = 10;
```

For more information, see the official documentation at https://developers.google.com/custom-search/json-api/v1/overview

### Render the form

To render the search form use the following code. If you want to change the routes, expand the module as you like using the Spryker workflow

```
{{ render(path('google-search-form')) }}
```

### Results

The search results are displayed under the URL 

```
/search (route name google-search-results). 
```

If you need a different route, just expand the module how you like

Under /Yves/Theme/default/ search you will find two example templates. Feed free to implement your own.