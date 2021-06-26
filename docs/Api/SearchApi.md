# Xrely\Client\SearchApi

All URIs are relative to *https://www.xrely.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchPost**](SearchApi.md#searchPost) | **POST** /search | Provides relevant result for your query
[**searchSuggestionsGet**](SearchApi.md#searchSuggestionsGet) | **GET** /search/suggestions | Get autocomplete phrase or keywords for your query


# **searchPost**
> \Xrely\Client\Model\ApiResponse searchPost($body)

Provides relevant result for your query



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Xrely\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Xrely\Client\Model\SearchRequest(); // \Xrely\Client\Model\SearchRequest | Search query term or keyword
$body["ak"]="ACCOUNT KEY"; // string | Account Key
$body["q"]="KEYWORD"; // string | Search Term or Keyword
$body["size"]="5"; // int | Number Of Results Required
try {
//var_dump($body);
  $result = $apiInstance->searchPost($body);
   print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Xrely\Client\Model\SearchRequest**](../Model/SearchRequest.md)| Search query term or keyword |

### Return type

[**\Xrely\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchSuggestionsGet**
> \Xrely\Client\Model\ApiResponse searchSuggestionsGet($q, $ak, $size)

Get autocomplete phrase or keywords for your query



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
error_reporting(E_ALL);

$apiInstance = new Xrely\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = "SEARCH KEYWORD"; // string | Search Term or Keyword
$ak = "ACCOUNT KEY"; // string | Account Key
$size = 5; // int | Number Of Results Required

try {
    $result = $apiInstance->searchSuggestionsGet($q, $ak, $size);
    echo(count($result["data"]->results));
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchSuggestionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **q** | **string**| Search Term or Keyword |
 **ak** | **string**| Account Key |
 **size** | **int**| Number Of Results Required | [optional]

### Return type

[**\Xrely\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)