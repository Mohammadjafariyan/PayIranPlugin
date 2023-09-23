# Swagger\Client\PermissionsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPermission**](PermissionsApi.md#createpermission) | **POST** /permissions | Create a Permission
[**deletePermission**](PermissionsApi.md#deletepermission) | **DELETE** /permissions/{id} | Delete a Permission
[**getMyPermissions**](PermissionsApi.md#getmypermissions) | **GET** /permissions/me | List My Permissions
[**getPermission**](PermissionsApi.md#getpermission) | **GET** /permissions/{id} | Retrieve a Permission
[**getPermissions**](PermissionsApi.md#getpermissions) | **GET** /permissions | List Permissions
[**updatePermission**](PermissionsApi.md#updatepermission) | **PATCH** /permissions/{id} | Update a Permission

# **createPermission**
> \Swagger\Client\Model\InlineResponse20063 createPermission($body, $meta)

Create a Permission

Create a new permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\PermissionsBody(); // \Swagger\Client\Model\PermissionsBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createPermission($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->createPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PermissionsBody**](../Model/PermissionsBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePermission**
> deletePermission($id)

Delete a Permission

Delete an existing permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Index

try {
    $apiInstance->deletePermission($id);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->deletePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Index |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMyPermissions**
> \Swagger\Client\Model\InlineResponse20064 getMyPermissions()

List My Permissions

List the permissions that apply to the current user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getMyPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getMyPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPermission**
> \Swagger\Client\Model\InlineResponse20063 getPermission($id, $fields, $meta)

Retrieve a Permission

Retrieve a single permissions object by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Index
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->getPermission($id, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Index |
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPermissions**
> \Swagger\Client\Model\InlineResponse20062 getPermissions($fields, $limit, $offset, $meta, $sort, $filter, $search, $page)

List Permissions

List all permissions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$limit = 56; // int | A limit on the number of objects that are returned.
$offset = 56; // int | How many items to skip when fetching data.
$meta = "meta_example"; // string | What metadata to return in the response.
$sort = array("sort_example"); // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.
$filter = array("filter_example"); // string[] | Select items in collection by given conditions.
$search = "search_example"; // string | Filter by items that contain the given search query in one of their fields.
$page = 56; // int | Cursor for use in pagination. Often used in combination with limit.

try {
    $result = $apiInstance->getPermissions($fields, $limit, $offset, $meta, $sort, $filter, $search, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **limit** | **int**| A limit on the number of objects that are returned. | [optional]
 **offset** | **int**| How many items to skip when fetching data. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]
 **sort** | [**string[]**](../Model/string.md)| How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. | [optional]
 **filter** | [**string[]**](../Model/string.md)| Select items in collection by given conditions. | [optional]
 **search** | **string**| Filter by items that contain the given search query in one of their fields. | [optional]
 **page** | **int**| Cursor for use in pagination. Often used in combination with limit. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePermission**
> \Swagger\Client\Model\InlineResponse20063 updatePermission($id, $body, $meta)

Update a Permission

Update an existing permission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Index
$body = new \Swagger\Client\Model\PermissionsIdBody(); // \Swagger\Client\Model\PermissionsIdBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updatePermission($id, $body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->updatePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Index |
 **body** | [**\Swagger\Client\Model\PermissionsIdBody**](../Model/PermissionsIdBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

