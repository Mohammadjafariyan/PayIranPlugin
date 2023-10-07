# Swagger\Client\OperationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOperation**](OperationsApi.md#createoperation) | **POST** /operations | Create an Operation
[**deleteOperation**](OperationsApi.md#deleteoperation) | **DELETE** /operations/{id} | Delete an Operation
[**getOperation**](OperationsApi.md#getoperation) | **GET** /operations/{id} | Retrieve an Operation
[**getOperations**](OperationsApi.md#getoperations) | **GET** /operations | List Operations
[**updateOperation**](OperationsApi.md#updateoperation) | **PATCH** /operations/{id} | Update an Operation

# **createOperation**
> \Swagger\Client\Model\InlineResponse20086 createOperation($body, $fields, $meta)

Create an Operation

Create a new operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\OperationsBody(); // \Swagger\Client\Model\OperationsBody | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createOperation($body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->createOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\OperationsBody**](../Model/OperationsBody.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOperation**
> deleteOperation($id)

Delete an Operation

Delete an existing operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier for the object.

try {
    $apiInstance->deleteOperation($id);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->deleteOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the object. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperation**
> \Swagger\Client\Model\InlineResponse20086 getOperation($id)

Retrieve an Operation

Retrieve a single operation by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier for the object.

try {
    $result = $apiInstance->getOperation($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the object. |

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOperations**
> \Swagger\Client\Model\InlineResponse20085 getOperations()

List Operations

Get all operations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOperations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->getOperations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20085**](../Model/InlineResponse20085.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOperation**
> \Swagger\Client\Model\InlineResponse20086 updateOperation($id, $body, $fields, $meta)

Update an Operation

Update an existing operation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\OperationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier for the object.
$body = new \Swagger\Client\Model\OperationsIdBody(); // \Swagger\Client\Model\OperationsIdBody | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateOperation($id, $body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OperationsApi->updateOperation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the object. |
 **body** | [**\Swagger\Client\Model\OperationsIdBody**](../Model/OperationsIdBody.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

