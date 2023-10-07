# Swagger\Client\ItemsCityTranslationsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItemsCityTranslations**](ItemsCityTranslationsApi.md#createitemscitytranslations) | **POST** /items/City_translations | Create an Item
[**deleteSingleItemsCityTranslations**](ItemsCityTranslationsApi.md#deletesingleitemscitytranslations) | **DELETE** /items/City_translations/{id} | Delete an Item
[**readItemsCityTranslations**](ItemsCityTranslationsApi.md#readitemscitytranslations) | **GET** /items/City_translations | List Items
[**readSingleItemsCityTranslations**](ItemsCityTranslationsApi.md#readsingleitemscitytranslations) | **GET** /items/City_translations/{id} | Retrieve an Item
[**updateSingleItemsCityTranslations**](ItemsCityTranslationsApi.md#updatesingleitemscitytranslations) | **PATCH** /items/City_translations/{id} | Update an Item

# **createItemsCityTranslations**
> \Swagger\Client\Model\InlineResponse20020 createItemsCityTranslations($body, $meta)

Create an Item

Create a new City_translations item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsCityTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ItemsCityTranslationsBody(); // \Swagger\Client\Model\ItemsCityTranslationsBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createItemsCityTranslations($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsCityTranslationsApi->createItemsCityTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ItemsCityTranslationsBody**](../Model/ItemsCityTranslationsBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSingleItemsCityTranslations**
> deleteSingleItemsCityTranslations($id)

Delete an Item

Delete an existing City_translations item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsCityTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id10(); // \Swagger\Client\Model\Id10 | Index of the item.

try {
    $apiInstance->deleteSingleItemsCityTranslations($id);
} catch (Exception $e) {
    echo 'Exception when calling ItemsCityTranslationsApi->deleteSingleItemsCityTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id10**](../Model/.md)| Index of the item. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readItemsCityTranslations**
> \Swagger\Client\Model\InlineResponse20019 readItemsCityTranslations($fields, $limit, $meta, $offset, $sort, $filter, $search)

List Items

List the City_translations items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Auth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\ItemsCityTranslationsApi(
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
    $result = $apiInstance->readItemsCityTranslations($fields, $limit, $meta, $offset, $sort, $filter, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsCityTranslationsApi->readItemsCityTranslations: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Auth](../../README.md#Auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readSingleItemsCityTranslations**
> \Swagger\Client\Model\InlineResponse20021 readSingleItemsCityTranslations($id, $fields, $meta)

Retrieve an Item

Retrieve a single City_translations item by unique identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsCityTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id9(); // \Swagger\Client\Model\Id9 | Index of the item.
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->readSingleItemsCityTranslations($id, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsCityTranslationsApi->readSingleItemsCityTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id9**](../Model/.md)| Index of the item. |
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSingleItemsCityTranslations**
> \Swagger\Client\Model\InlineResponse20021 updateSingleItemsCityTranslations($id, $body, $fields, $meta)

Update an Item

Update an existing City_translations item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ItemsCityTranslationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = new \Swagger\Client\Model\Id11(); // \Swagger\Client\Model\Id11 | Index of the item.
$body = new \Swagger\Client\Model\ItemsCityTranslations(); // \Swagger\Client\Model\ItemsCityTranslations | 
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateSingleItemsCityTranslations($id, $body, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsCityTranslationsApi->updateSingleItemsCityTranslations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**\Swagger\Client\Model\Id11**](../Model/.md)| Index of the item. |
 **body** | [**\Swagger\Client\Model\ItemsCityTranslations**](../Model/ItemsCityTranslations.md)|  | [optional]
 **fields** | [**string[]**](../Model/string.md)| Control what fields are being returned in the object. | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

