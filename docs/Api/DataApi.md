# Xrely\Client\DataApi

All URIs are relative to *https://www.xrely.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataStoreDelete**](DataApi.md#dataStoreDelete) | **DELETE** /data/store | Delete data from your account bucket
[**dataStorePost**](DataApi.md#dataStorePost) | **POST** /data/store | Insert data to your account bucket


# **dataStoreDelete**
> \Xrely\Client\Model\DataApiResponse dataStoreDelete($body)

Delete data from your account bucket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
error_reporting(E_ALL);
$apiInstance = new Xrely\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Xrely\Client\Model\DataStoreRequest(); // \Xrely\Client\Model\DataStoreRequest |
//var_dump($body);
try {
        $body["secretKey"]="SECRET KEY";
        $item1=new \Xrely\Client\Model\DocStoreItem();
        $item1["keyword"]="PRODUCT KEYWORD";
        $item1["url"]="PRODUCT URL";
        $docs=array();
        array_push($docs,$item1);
        $body->setDocs($docs);
        $result = $apiInstance->dataStoreDelete($body);
        print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->dataStoreDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Xrely\Client\Model\DataStoreRequest**](../Model/DataStoreRequest.md)|  | [optional]

### Return type

[**\Xrely\Client\Model\DataApiResponse**](../Model/DataApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataStorePost**
> \Xrely\Client\Model\DataApiResponse dataStorePost($body)

Insert data to your account bucket



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
error_reporting(E_ALL);
$apiInstance = new Xrely\Client\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Xrely\Client\Model\DataStoreRequest(); // \Xrely\Client\Model\DataStoreRequest |
//var_dump($body);
try {
        $body["secretKey"]="SECRET KEY";
        $item1=new \Xrely\Client\Model\DocStoreItem();
        $item1["keyword"]="PRODUCT KEYWORD";
        $item1["url"]="PRODUCT URL";
        $docs=array();
        array_push($docs,$item1);
        $body->setDocs($docs);
        $result = $apiInstance->dataStorePost($body);
        print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->dataStorePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Xrely\Client\Model\DataStoreRequest**](../Model/DataStoreRequest.md)|  | [optional]

### Return type

[**\Xrely\Client\Model\DataApiResponse**](../Model/DataApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)