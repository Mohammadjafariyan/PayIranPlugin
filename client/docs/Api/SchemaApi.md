# Swagger\Client\SchemaApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**schemaApply**](SchemaApi.md#schemaapply) | **POST** /schema/apply | Apply Schema Difference
[**schemaDiff**](SchemaApi.md#schemadiff) | **POST** /schema/diff | Retrieve Schema Difference
[**schemaSnapshot**](SchemaApi.md#schemasnapshot) | **GET** /schema/snapshot | Retrieve Schema Snapshot

# **schemaApply**
> schemaApply($body)

Apply Schema Difference

Update the instance's schema by passing the diff previously retrieved via `/schema/diff` endpoint in the JSON request body or a JSON/YAML file. This endpoint is only available to admin users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SchemaApplyBody(); // \Swagger\Client\Model\SchemaApplyBody | 

try {
    $apiInstance->schemaApply($body);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SchemaApplyBody**](../Model/SchemaApplyBody.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schemaApply**
> schemaApply($file)

Apply Schema Difference

Update the instance's schema by passing the diff previously retrieved via `/schema/diff` endpoint in the JSON request body or a JSON/YAML file. This endpoint is only available to admin users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | 

try {
    $apiInstance->schemaApply($file);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schemaDiff**
> \Swagger\Client\Model\SchemaApplyBody schemaDiff($body, $force)

Retrieve Schema Difference

Compare the current instance's schema against the schema snapshot in JSON request body or a JSON/YAML file and retrieve the difference. This endpoint is only available to admin users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SchemaDiffBody(); // \Swagger\Client\Model\SchemaDiffBody | 
$force = true; // bool | Bypass version and database vendor restrictions.

try {
    $result = $apiInstance->schemaDiff($body, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaDiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SchemaDiffBody**](../Model/SchemaDiffBody.md)|  |
 **force** | **bool**| Bypass version and database vendor restrictions. | [optional]

### Return type

[**\Swagger\Client\Model\SchemaApplyBody**](../Model/SchemaApplyBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schemaDiff**
> \Swagger\Client\Model\SchemaApplyBody schemaDiff($file, $force)

Retrieve Schema Difference

Compare the current instance's schema against the schema snapshot in JSON request body or a JSON/YAML file and retrieve the difference. This endpoint is only available to admin users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = "file_example"; // string | 
$force = true; // bool | Bypass version and database vendor restrictions.

try {
    $result = $apiInstance->schemaDiff($file, $force);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaDiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  |
 **force** | **bool**| Bypass version and database vendor restrictions. | [optional]

### Return type

[**\Swagger\Client\Model\SchemaApplyBody**](../Model/SchemaApplyBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **schemaSnapshot**
> \Swagger\Client\Model\InlineResponse2005 schemaSnapshot($export)

Retrieve Schema Snapshot

Retrieve the current schema. This endpoint is only available to admin users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SchemaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export = "export_example"; // string | Saves the API response to a file. Accepts one of \"csv\", \"json\", \"xml\", \"yaml\".

try {
    $result = $apiInstance->schemaSnapshot($export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SchemaApi->schemaSnapshot: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export** | **string**| Saves the API response to a file. Accepts one of \&quot;csv\&quot;, \&quot;json\&quot;, \&quot;xml\&quot;, \&quot;yaml\&quot;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/yaml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

