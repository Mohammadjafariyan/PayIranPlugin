# Swagger\Client\ServerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ping**](ServerApi.md#ping) | **GET** /server/ping | Ping
[**serverInfo**](ServerApi.md#serverinfo) | **GET** /server/info | System Info

# **ping**
> string ping()

Ping

Ping, pong. Ping.. pong.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->ping();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->ping: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/text

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serverInfo**
> \Swagger\Client\Model\InlineResponse2006 serverInfo($super_admin_token)

System Info

Perform a system status check and return the options.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ServerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$super_admin_token = 56; // int | The first time you create a project, the provided token will be saved and required for subsequent project installs. It can also be found and configured in `/config/__api.json` on your server.

try {
    $result = $apiInstance->serverInfo($super_admin_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerApi->serverInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **super_admin_token** | **int**| The first time you create a project, the provided token will be saved and required for subsequent project installs. It can also be found and configured in &#x60;/config/__api.json&#x60; on your server. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

