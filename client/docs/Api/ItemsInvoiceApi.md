# Swagger\Client\ItemsInvoiceApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemsInvoice**](ItemsInvoiceApi.md#createitemsinvoice) | **POST** /items/Invoice | Create an Item
[**deleteSingleItemsInvoice**](ItemsInvoiceApi.md#deletesingleitemsinvoice) | **DELETE** /items/Invoice/{id} | Delete an Item
[**readItemsInvoice**](ItemsInvoiceApi.md#readitemsinvoice) | **GET** /items/Invoice | List Items
[**readSingleItemsInvoice**](ItemsInvoiceApi.md#readsingleitemsinvoice) | **GET** /items/Invoice/{id} | Retrieve an Item
[**updateSingleItemsInvoice**](ItemsInvoiceApi.md#updatesingleitemsinvoice) | **PATCH** /items/Invoice/{id} | Update an Item

# **createItemsInvoice**
> \Swagger\Client\Model\InlineResponse20029 createItemsInvoice($body, $meta)

Create an Item

Create a new Invoice item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ItemsInvoiceBody(); // \Swagger\Client\Model\ItemsInvoiceBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createItemsInvoice($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsInvoiceApi->createItemsInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ItemsInvoiceBody**](../Model/ItemsInvoiceBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSingleItemsInvoice**
> deleteSingleItemsInvoice($id)

Delete an Item

Delete an existing Invoice item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id19(); // \Swagger\Client\Model\Id19 | Index of the item.

try {
    $apiInstance->deleteSingleItemsInvoice($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsInvoiceApi->deleteSingleItemsInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id19**](../Model/.md)| Index of the item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readItemsInvoice**
> \Swagger\Client\Model\InlineResponse20028 readItemsInvoice($fields, $limit, $meta, $offset, $sort, $filter, $search)

List Items

List the Invoice items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsInvoiceApi(
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
    $result = $apiInstance->readItemsInvoice($fields, $limit, $meta, $offset, $sort, $filter, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsInvoiceApi->readItemsInvoice: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[Auth](../../README.md#Auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSingleItemsInvoice**
> \Swagger\Client\Model\InlineResponse20030 readSingleItemsInvoice($id, $fields, $meta)

Retrieve an Item

Retrieve a single Invoice item by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id18(); // \Swagger\Client\Model\Id18 | Index of the item.
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->readSingleItemsInvoice($id, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsInvoiceApi->readSingleItemsInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id18**](../Model/.md)| Index of the item. |
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSingleItemsInvoice**
> \Swagger\Client\Model\InlineResponse20030 updateSingleItemsInvoice($id, $body, $fields, $meta)

Update an Item

Update an existing Invoice item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsInvoiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id20(); // \Swagger\Client\Model\Id20 | Index of the item.
$body = new \Swagger\Client\Model\ItemsInvoice(); // \Swagger\Client\Model\ItemsInvoice | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateSingleItemsInvoice($id, $body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsInvoiceApi->updateSingleItemsInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id20**](../Model/.md)| Index of the item. |
 **body** | [**\Swagger\Client\Model\ItemsInvoice**](../Model/ItemsInvoice.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

