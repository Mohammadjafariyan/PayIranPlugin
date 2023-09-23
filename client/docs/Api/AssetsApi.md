# Swagger\Client\AssetsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAsset**](AssetsApi.md#getasset) | **GET** /assets/{id} | Get an Asset

# **getAsset**
> string getAsset($id, $key, $transforms, $download)

Get an Asset

Image typed files can be dynamically resized and transformed to fit any need.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The id of the file.
$key = "key_example"; // string | The key of the asset size configured in settings.
$transforms = "transforms_example"; // string | A JSON array of image transformations
$download = true; // bool | Download the asset to your computer

try {
    $result = $apiInstance->getAsset($id, $key, $transforms, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetsApi->getAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the file. |
 **key** | **string**| The key of the asset size configured in settings. | [optional]
 **transforms** | **string**| A JSON array of image transformations | [optional]
 **download** | **bool**| Download the asset to your computer | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

