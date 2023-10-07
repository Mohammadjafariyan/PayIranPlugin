# Swagger\Client\ItemsTicketApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemsTicket**](ItemsTicketApi.md#createitemsticket) | **POST** /items/Ticket | Create an Item
[**deleteSingleItemsTicket**](ItemsTicketApi.md#deletesingleitemsticket) | **DELETE** /items/Ticket/{id} | Delete an Item
[**readItemsTicket**](ItemsTicketApi.md#readitemsticket) | **GET** /items/Ticket | List Items
[**readSingleItemsTicket**](ItemsTicketApi.md#readsingleitemsticket) | **GET** /items/Ticket/{id} | Retrieve an Item
[**updateSingleItemsTicket**](ItemsTicketApi.md#updatesingleitemsticket) | **PATCH** /items/Ticket/{id} | Update an Item

# **createItemsTicket**
> \Swagger\Client\Model\InlineResponse20056 createItemsTicket($body, $meta)

Create an Item

Create a new Ticket item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ItemsTicketBody(); // \Swagger\Client\Model\ItemsTicketBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createItemsTicket($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsTicketApi->createItemsTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ItemsTicketBody**](../Model/ItemsTicketBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSingleItemsTicket**
> deleteSingleItemsTicket($id)

Delete an Item

Delete an existing Ticket item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id46(); // \Swagger\Client\Model\Id46 | Index of the item.

try {
    $apiInstance->deleteSingleItemsTicket($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsTicketApi->deleteSingleItemsTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id46**](../Model/.md)| Index of the item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readItemsTicket**
> \Swagger\Client\Model\InlineResponse20055 readItemsTicket($fields, $limit, $meta, $offset, $sort, $filter, $search)

List Items

List the Ticket items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsTicketApi(
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
    $result = $apiInstance->readItemsTicket($fields, $limit, $meta, $offset, $sort, $filter, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsTicketApi->readItemsTicket: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[Auth](../../README.md#Auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSingleItemsTicket**
> \Swagger\Client\Model\InlineResponse20057 readSingleItemsTicket($id, $fields, $meta)

Retrieve an Item

Retrieve a single Ticket item by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id45(); // \Swagger\Client\Model\Id45 | Index of the item.
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->readSingleItemsTicket($id, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsTicketApi->readSingleItemsTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id45**](../Model/.md)| Index of the item. |
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSingleItemsTicket**
> \Swagger\Client\Model\InlineResponse20057 updateSingleItemsTicket($id, $body, $fields, $meta)

Update an Item

Update an existing Ticket item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsTicketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id47(); // \Swagger\Client\Model\Id47 | Index of the item.
$body = new \Swagger\Client\Model\ItemsTicket(); // \Swagger\Client\Model\ItemsTicket | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateSingleItemsTicket($id, $body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsTicketApi->updateSingleItemsTicket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id47**](../Model/.md)| Index of the item. |
 **body** | [**\Swagger\Client\Model\ItemsTicket**](../Model/ItemsTicket.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20057**](../Model/InlineResponse20057.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

