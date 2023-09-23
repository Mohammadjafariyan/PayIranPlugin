# PermissionsIdBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collection** | **object** | What collection this permission applies to. | [optional] 
**comment** | **string** | If the user can post comments. &#x60;full&#x60;. | [optional] 
**create** | **string** | If the user can create items. | [optional] 
**delete** | **string** | If the user can update items. | [optional] 
**explain** | **string** | If the user is required to leave a comment explaining what was changed. | [optional] 
**read** | **string** | If the user can read items. | [optional] 
**read_field_blacklist** | **object** | Explicitly denies read access for specific fields. | [optional] 
**role** | **object** | Unique identifier of the role this permission applies to. | [optional] 
**status** | **object** | What status this permission applies to. | [optional] 
**status_blacklist** | **object** | Explicitly denies specific statuses to be used. | [optional] 
**update** | **string** | If the user can update items. | [optional] 
**write_field_blacklist** | **object** | Explicitly denies write access for specific fields. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

