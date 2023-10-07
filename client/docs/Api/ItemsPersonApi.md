# Swagger\Client\ItemsPersonApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemsPerson**](ItemsPersonApi.md#createitemsperson) | **POST** /items/Person | Create an Item
[**deleteSingleItemsPerson**](ItemsPersonApi.md#deletesingleitemsperson) | **DELETE** /items/Person/{id} | Delete an Item
[**readItemsPerson**](ItemsPersonApi.md#readitemsperson) | **GET** /items/Person | List Items
[**readSingleItemsPerson**](ItemsPersonApi.md#readsingleitemsperson) | **GET** /items/Person/{id} | Retrieve an Item
[**updateSingleItemsPerson**](ItemsPersonApi.md#updatesingleitemsperson) | **PATCH** /items/Person/{id} | Update an Item

# **createItemsPerson**
> \Swagger\Client\Model\InlineResponse20044 createItemsPerson($body, $meta)

Create an Item

Create a new Person item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsPersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ItemsPersonBody(); // \Swagger\Client\Model\ItemsPersonBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createItemsPerson($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsPersonApi->createItemsPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ItemsPersonBody**](../Model/ItemsPersonBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSingleItemsPerson**
> deleteSingleItemsPerson($id)

Delete an Item

Delete an existing Person item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsPersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id34(); // \Swagger\Client\Model\Id34 | Index of the item.

try {
    $apiInstance->deleteSingleItemsPerson($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsPersonApi->deleteSingleItemsPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id34**](../Model/.md)| Index of the item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readItemsPerson**
> \Swagger\Client\Model\InlineResponse20043 readItemsPerson($fields, $limit, $meta, $offset, $sort, $filter, $search)

List Items

List the Person items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsPersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$limit = 56; // int | A limit on the number of objects that are returned.
$meta = "meta_example"; // string | What metadata to return in the response.
$offset = 56; // int | How many items to skip when fetching data.
$sort = array("sort_example"); // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.
$filter = array("filter_example"); // string[] | Select items in collection by given conditions.
$search = "search_example"; // string | Filter by items that contain the given search query in one of their fields.

try {
    $result = $apiInstance->readItemsPerson($fields, $limit, $meta, $offset, $sort, $filter, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsPersonApi->readItemsPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **limit** | **int**| A limit on the number of objects that are returned. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]
 **offset** | **int**| How many items to skip when fetching data. | [optional]
 **sort** | [**string[]**](../Model/string.md)| How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. | [optional]
 **filter** | [**string[]**](../Model/string.md)| Select items in collection by given conditions. | [optional]
 **search** | **string**| Filter by items that contain the given search query in one of their fields. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[Auth](../../README.md#Auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSingleItemsPerson**
> \Swagger\Client\Model\InlineResponse20045 readSingleItemsPerson($id, $fields, $meta)

Retrieve an Item

Retrieve a single Person item by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsPersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id33(); // \Swagger\Client\Model\Id33 | Index of the item.
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->readSingleItemsPerson($id, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsPersonApi->readSingleItemsPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id33**](../Model/.md)| Index of the item. |
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSingleItemsPerson**
> \Swagger\Client\Model\InlineResponse20045 updateSingleItemsPerson($id, $body, $fields, $meta)

Update an Item

Update an existing Person item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsPersonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id35(); // \Swagger\Client\Model\Id35 | Index of the item.
$body = new \Swagger\Client\Model\ItemsPerson(); // \Swagger\Client\Model\ItemsPerson | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateSingleItemsPerson($id, $body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsPersonApi->updateSingleItemsPerson: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id35**](../Model/.md)| Index of the item. |
 **body** | [**\Swagger\Client\Model\ItemsPerson**](../Model/ItemsPerson.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

