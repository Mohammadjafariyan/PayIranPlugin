# Swagger\Client\SettingsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettings**](SettingsApi.md#getsettings) | **GET** /settings | Retrieve Settings
[**updateSetting**](SettingsApi.md#updatesetting) | **PATCH** /settings | Update Settings

# **getSettings**
> \Swagger\Client\Model\InlineResponse20079 getSettings($limit, $offset, $meta, $page)

Retrieve Settings

List the settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | A limit on the number of objects that are returned.
$offset = 56; // int | How many items to skip when fetching data.
$meta = "meta_example"; // string | What metadata to return in the response.
$page = 56; // int | Cursor for use in pagination. Often used in combination with limit.

try {
    $result = $apiInstance->getSettings($limit, $offset, $meta, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| A limit on the number of objects that are returned. | [optional]
 **offset** | **int**| How many items to skip when fetching data. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]
 **page** | **int**| Cursor for use in pagination. Often used in combination with limit. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSetting**
> \Swagger\Client\Model\InlineResponse20079 updateSetting($body)

Update Settings

Update the settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \stdClass; // object | 

try {
    $result = $apiInstance->updateSetting($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20079**](../Model/InlineResponse20079.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

