# PermissionsBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **string** | What collection this permission applies to. | [optional] 
**comment** | **string** | If the user can post comments. | [optional] 
**create** | **string** | If the user can create items. | [optional] 
**delete** | **string** | If the user can update items. | [optional] 
**explain** | **string** | If the user is required to leave a comment explaining what was changed. | [optional] 
**read** | **string** | If the user can read items. | [optional] 
**role** | **int** | Unique identifier of the role this permission applies to. | [optional] 
**read_field_blacklist** | **string[]** | Explicitly denies read access for specific fields. | [optional] 
**status** | **string** | What status this permission applies to. | [optional] 
**status_blacklist** | **string[]** | Explicitly denies specific statuses to be used. | [optional] 
**update** | **string** | If the user can update items. | [optional] 
**write_field_blacklist** | **string[]** | Explicitly denies write access for specific fields. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

