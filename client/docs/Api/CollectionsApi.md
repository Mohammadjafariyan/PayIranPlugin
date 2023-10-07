# Swagger\Client\CollectionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCollection**](CollectionsApi.md#createcollection) | **POST** /collections | Create a Collection
[**deleteCollection**](CollectionsApi.md#deletecollection) | **DELETE** /collections/{id} | Delete a Collection
[**getCollection**](CollectionsApi.md#getcollection) | **GET** /collections/{id} | Retrieve a Collection
[**getCollections**](CollectionsApi.md#getcollections) | **GET** /collections | List Collections
[**updateCollection**](CollectionsApi.md#updatecollection) | **PATCH** /collections/{id} | Update a Collection

# **createCollection**
> \Swagger\Client\Model\InlineResponse20061 createCollection($body, $meta)

Create a Collection

Create a new collection in Directus.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\CollectionsBody(); // \Swagger\Client\Model\CollectionsBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createCollection($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->createCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CollectionsBody**](../Model/CollectionsBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCollection**
> deleteCollection($id)

Delete a Collection

Delete an existing collection. Warning: This will delete the whole collection, including the items within. Proceed with caution.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier of the collection.

try {
    $apiInstance->deleteCollection($id);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->deleteCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the collection. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollection**
> \Swagger\Client\Model\InlineResponse20061 getCollection($id, $meta)

Retrieve a Collection

Retrieves the details of a single collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier of the collection.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->getCollection($id, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the collection. |
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollections**
> \Swagger\Client\Model\InlineResponse20060 getCollections($offset, $meta)

List Collections

Returns a list of the collections available in the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | How many items to skip when fetching data.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->getCollections($offset, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->getCollections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| How many items to skip when fetching data. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCollection**
> \Swagger\Client\Model\InlineResponse20061 updateCollection($id, $body, $meta)

Update a Collection

Update an existing collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CollectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier of the collection.
$body = new \Swagger\Client\Model\CollectionsIdBody(); // \Swagger\Client\Model\CollectionsIdBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateCollection($id, $body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollectionsApi->updateCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier of the collection. |
 **body** | [**\Swagger\Client\Model\CollectionsIdBody**](../Model/CollectionsIdBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20061**](../Model/InlineResponse20061.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

