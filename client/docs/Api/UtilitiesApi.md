# Swagger\Client\UtilitiesApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clearCache**](UtilitiesApi.md#clearcache) | **POST** /utils/cache/clear | Clear Cache
[**export**](UtilitiesApi.md#export) | **POST** /utils/export/{collection} | Export Items
[**hashGenerate**](UtilitiesApi.md#hashgenerate) | **POST** /utils/hash/generate | Hash a string
[**hashVerify**](UtilitiesApi.md#hashverify) | **POST** /utils/hash/verify | Hash a string
[**import**](UtilitiesApi.md#import) | **POST** /utils/import/{collection} | Import Items
[**random**](UtilitiesApi.md#random) | **GET** /utils/random/string | Get a Random String
[**sort**](UtilitiesApi.md#sort) | **POST** /utils/sort/{collection} | Sort Items

# **clearCache**
> clearCache()

Clear Cache

Resets both the data and schema cache of Directus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->clearCache();
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->clearCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **export**
> export($collection, $body)

Export Items

Export a larger data set to a file in the File Library

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Collection identifier
$body = new \Swagger\Client\Model\ExportCollectionBody(); // \Swagger\Client\Model\ExportCollectionBody | 

try {
    $apiInstance->export($collection, $body);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->export: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Collection identifier |
 **body** | [**\Swagger\Client\Model\ExportCollectionBody**](../Model/ExportCollectionBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hashGenerate**
> \Swagger\Client\Model\InlineResponse2007 hashGenerate($body)

Hash a string

Generate a hash for a given string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\HashGenerateBody(); // \Swagger\Client\Model\HashGenerateBody | 

try {
    $result = $apiInstance->hashGenerate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->hashGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HashGenerateBody**](../Model/HashGenerateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **hashVerify**
> \Swagger\Client\Model\InlineResponse2008 hashVerify($body)

Hash a string

Generate a hash for a given string.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\HashVerifyBody(); // \Swagger\Client\Model\HashVerifyBody | 

try {
    $result = $apiInstance->hashVerify($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->hashVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\HashVerifyBody**](../Model/HashVerifyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **import**
> import($collection, $file)

Import Items

Import multiple records from a JSON or CSV file into a collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Collection identifier
$file = "file_example"; // string | 

try {
    $apiInstance->import($collection, $file);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->import: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Collection identifier |
 **file** | **string****string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **random**
> \Swagger\Client\Model\InlineResponse2009 random($length)

Get a Random String

Returns a random string of given length.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$length = 56; // int | Length of the random string.

try {
    $result = $apiInstance->random($length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->random: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **length** | **int**| Length of the random string. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sort**
> sort($collection, $body)

Sort Items

Re-sort items in collection based on start and to value of item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UtilitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Collection identifier
$body = new \Swagger\Client\Model\SortCollectionBody(); // \Swagger\Client\Model\SortCollectionBody | 

try {
    $apiInstance->sort($collection, $body);
} catch (Exception $e) {
    echo 'Exception when calling UtilitiesApi->sort: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Collection identifier |
 **body** | [**\Swagger\Client\Model\SortCollectionBody**](../Model/SortCollectionBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

