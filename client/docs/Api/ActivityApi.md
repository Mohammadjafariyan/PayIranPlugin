# Swagger\Client\ActivityApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createComment**](ActivityApi.md#createcomment) | **POST** /activity/comment | Create a Comment
[**deleteComment**](ActivityApi.md#deletecomment) | **DELETE** /activity/comment/{id} | Delete a Comment
[**getActivities**](ActivityApi.md#getactivities) | **GET** /activity | List Activity Actions
[**getActivity**](ActivityApi.md#getactivity) | **GET** /activity/{id} | Retrieve an Activity Action
[**updateComment**](ActivityApi.md#updatecomment) | **PATCH** /activity/comment/{id} | Update a Comment

# **createComment**
> \Swagger\Client\Model\InlineResponse20059 createComment($body, $meta)

Create a Comment

Creates a new comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ActivityCommentBody(); // \Swagger\Client\Model\ActivityCommentBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->createComment($body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->createComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ActivityCommentBody**](../Model/ActivityCommentBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteComment**
> deleteComment($id)

Delete a Comment

Delete an existing comment. Deleted comments can not be retrieved.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Index

try {
    $apiInstance->deleteComment($id);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteComment: ', $e->getMessage(), PHP_EOL;
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

# **getActivities**
> \Swagger\Client\Model\InlineResponse20058 getActivities($fields, $limit, $meta, $offset, $sort, $filter, $search)

List Activity Actions

Returns a list of activity actions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$limit = 56; // int | A limit on the number of objects that are returned.
$meta = "meta_example"; // string | What metadata to return in the response.
$offset = 56; // int | How many items to skip when fetching data.
$sort = array("sort_example"); // string[] | How to sort the returned items. `sort` is a CSV of fields used to sort the fetched items. Sorting defaults to ascending (ASC) order but a minus sign (` - `) can be used to reverse this to descending (DESC) order. Fields are prioritized by their order in the CSV. You can also use a ` ? ` to sort randomly.
$filter = array("filter_example"); // string[] | Select items in collection by given conditions.
$search = "search_example"; // string | Filter by items that contain the given search query in one of their fields.

try {
    $result = $apiInstance->getActivities($fields, $limit, $meta, $offset, $sort, $filter, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivities: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivity**
> \Swagger\Client\Model\InlineResponse20059 getActivity($id, $fields, $meta)

Retrieve an Activity Action

Retrieves the details of an existing activity action. Provide the primary key of the activity action and Directus will return the corresponding information.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Index
$fields = array("fields_example"); // string[] | Control what fields are being returned in the object.
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->getActivity($id, $fields, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->getActivity: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateComment**
> \Swagger\Client\Model\InlineResponse20059 updateComment($id, $body, $meta)

Update a Comment

Update the content of an existing comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Index
$body = new \Swagger\Client\Model\CommentIdBody(); // \Swagger\Client\Model\CommentIdBody | 
$meta = "meta_example"; // string | What metadata to return in the response.

try {
    $result = $apiInstance->updateComment($id, $body, $meta);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Index |
 **body** | [**\Swagger\Client\Model\CommentIdBody**](../Model/CommentIdBody.md)|  | [optional]
 **meta** | **string**| What metadata to return in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

