# Activity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the object. | [optional] 
**action** | **string** | Action that was performed. | [optional] 
**user** | [**OneOfActivityUser**](OneOfActivityUser.md) | The user who performed this action. | [optional] 
**timestamp** | [**\DateTime**](\DateTime.md) | When the action happened. | [optional] 
**ip** | [**OneOfActivityIp**](OneOfActivityIp.md) | The IP address of the user at the time the action took place. | [optional] 
**user_agent** | **string** | User agent string of the browser the user used when the action took place. | [optional] 
**collection** | [**OneOfActivityCollection**](OneOfActivityCollection.md) | Collection identifier in which the item resides. | [optional] 
**item** | **string** | Unique identifier for the item the action applied to. This is always a string, even for integer primary keys. | [optional] 
**comment** | **string** | User comment. This will store the comments that show up in the right sidebar of the item edit page in the admin app. | [optional] 
**origin** | **string** | Origin of the request when the action took place. | [optional] 
**revisions** | [**\Swagger\Client\Model\OneOfActivityRevisionsItems[]**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

