# Swagger\Client\FlowsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFlow**](FlowsApi.md#createflow) | **POST** /flows | Create a Flow
[**deleteFlow**](FlowsApi.md#deleteflow) | **DELETE** /flows/{id} | Delete a Flow
[**getFlow**](FlowsApi.md#getflow) | **GET** /flows/{id} | Retrieve a Flow
[**getFlows**](FlowsApi.md#getflows) | **GET** /flows | List Flows
[**updateFlow**](FlowsApi.md#updateflow) | **PATCH** /flows/{id} | Update a Flow

# **createFlow**
> \Swagger\Client\Model\InlineResponse20084 createFlow($body, $fields, $meta)

Create a Flow

Create a new flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\FlowsBody(); // \Swagger\Client\Model\FlowsBody | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createFlow($body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->createFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FlowsBody**](../Model/FlowsBody.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFlow**
> deleteFlow($id)

Delete a Flow

Delete an existing flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier for the object.

try {
    $apiInstance->deleteFlow($id);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->deleteFlow: ', $e->getMessage(), PHP_EOL;
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

# **getFlow**
> \Swagger\Client\Model\InlineResponse20084 getFlow($id)

Retrieve a Flow

Retrieve a single flow by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier for the object.

try {
    $result = $apiInstance->getFlow($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the object. |

### Return type

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFlows**
> \Swagger\Client\Model\InlineResponse20083 getFlows()

List Flows

Get all flows.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFlows();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->getFlows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20083**](../Model/InlineResponse20083.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFlow**
> \Swagger\Client\Model\InlineResponse20084 updateFlow($id, $body, $fields, $meta)

Update a Flow

Update an existing flow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Unique identifier for the object.
$body = new \Swagger\Client\Model\FlowsIdBody(); // \Swagger\Client\Model\FlowsIdBody | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateFlow($id, $body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlowsApi->updateFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique identifier for the object. |
 **body** | [**\Swagger\Client\Model\FlowsIdBody**](../Model/FlowsIdBody.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

