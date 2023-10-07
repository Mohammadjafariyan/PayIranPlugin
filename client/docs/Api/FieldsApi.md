# Swagger\Client\FieldsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createField**](FieldsApi.md#createfield) | **POST** /fields/{collection} | Create Field in Collection
[**deleteField**](FieldsApi.md#deletefield) | **DELETE** /fields/{collection}/{id} | Delete a Field
[**getCollectionField**](FieldsApi.md#getcollectionfield) | **GET** /fields/{collection}/{id} | Retrieve a Field
[**getCollectionFields**](FieldsApi.md#getcollectionfields) | **GET** /fields/{collection} | List Fields in Collection
[**getFields**](FieldsApi.md#getfields) | **GET** /fields | List All Fields
[**updateField**](FieldsApi.md#updatefield) | **PATCH** /fields/{collection}/{id} | Update a Field

# **createField**
> \Swagger\Client\Model\InlineResponse20063 createField($collection, $body)

Create Field in Collection

Create a new field in a given collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Unique identifier of the collection the item resides in.
$body = new \Swagger\Client\Model\FieldsCollectionBody(); // \Swagger\Client\Model\FieldsCollectionBody | 

try {
    $result = $apiInstance->createField($collection, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->createField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection the item resides in. |
 **body** | [**\Swagger\Client\Model\FieldsCollectionBody**](../Model/FieldsCollectionBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteField**
> deleteField($collection, $id)

Delete a Field

Delete an existing field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Unique identifier of the collection the item resides in.
$id = "id_example"; // string | Unique identifier of the field.

try {
    $apiInstance->deleteField($collection, $id);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->deleteField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection the item resides in. |
 **id** | **string**| Unique identifier of the field. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectionField**
> \Swagger\Client\Model\InlineResponse20063 getCollectionField($collection, $id)

Retrieve a Field

Retrieves the details of a single field in a given collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Unique identifier of the collection the item resides in.
$id = "id_example"; // string | Unique identifier of the field.

try {
    $result = $apiInstance->getCollectionField($collection, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getCollectionField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection the item resides in. |
 **id** | **string**| Unique identifier of the field. |

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCollectionFields**
> \Swagger\Client\Model\InlineResponse20062 getCollectionFields($collection, $sort)

List Fields in Collection

Returns a list of the fields available in the given collection.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Unique identifier of the collection the item resides in.
$sort = array("sort_example"); // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.

try {
    $result = $apiInstance->getCollectionFields($collection, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getCollectionFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection the item resides in. |
 **sort** | [**string[]**](../Model/string.md)| How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFields**
> \Swagger\Client\Model\InlineResponse20062 getFields($limit, $sort)

List All Fields

Returns a list of the fields available in the project.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$limit = 56; // int | A limit on the number of objects that are returned.
$sort = array("sort_example"); // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.

try {
    $result = $apiInstance->getFields($limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->getFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| A limit on the number of objects that are returned. | [optional]
 **sort** | [**string[]**](../Model/string.md)| How to sort the returned items. &#x60;sort&#x60; is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (&#x60; - &#x60;) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a &#x60; ? &#x60; to sort randomly. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20062**](../Model/InlineResponse20062.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateField**
> \Swagger\Client\Model\InlineResponse20063 updateField($collection, $id, $body)

Update a Field

Update an existing field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collection = "collection_example"; // string | Unique identifier of the collection the item resides in.
$id = "id_example"; // string | Unique identifier of the field.
$body = new \Swagger\Client\Model\CollectionIdBody(); // \Swagger\Client\Model\CollectionIdBody | 

try {
    $result = $apiInstance->updateField($collection, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldsApi->updateField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **collection** | **string**| Unique identifier of the collection the item resides in. |
 **id** | **string**| Unique identifier of the field. |
 **body** | [**\Swagger\Client\Model\CollectionIdBody**](../Model/CollectionIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20063**](../Model/InlineResponse20063.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

