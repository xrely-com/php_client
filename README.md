# XrelyClient-php
API Documentation for XRELY platform


- API version: 1.0.0


## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/xrely-com/php_client.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/XrelyClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```
OR
```
 php vendor/phpunit/phpunit/phpunit
```


## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Xrely\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Xrely\Client\Model\DataStoreRequest(); // \Xrely\Client\Model\DataStoreRequest | 

try {
    $result = $apiInstance->dataStoreDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->dataStoreDelete: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://www.xrely.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataApi* | [**dataStoreDelete**](docs/Api/DataApi.md#datastoredelete) | **DELETE** /data/store | Delete data from your account bucket
*DataApi* | [**dataStorePost**](docs/Api/DataApi.md#datastorepost) | **POST** /data/store | Insert data to your account bucket
*SearchApi* | [**searchPost**](docs/Api/SearchApi.md#searchpost) | **POST** /search | Provides relevant result for your query
*SearchApi* | [**searchSuggestionsGet**](docs/Api/SearchApi.md#searchsuggestionsget) | **GET** /search/suggestions | Get autocomplete phrase or keywords for your query


## Documentation For Models

 - [AggrigationField](docs/Model/AggrigationField.md)
 - [ApiResponse](docs/Model/ApiResponse.md)
 - [DataApiResponse](docs/Model/DataApiResponse.md)
 - [DataMessage](docs/Model/DataMessage.md)
 - [DataStoreRequest](docs/Model/DataStoreRequest.md)
 - [DocStoreItem](docs/Model/DocStoreItem.md)
 - [FilterField](docs/Model/FilterField.md)
 - [MapObject](docs/Model/MapObject.md)
 - [SearchRequest](docs/Model/SearchRequest.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author

info@xrely.com


