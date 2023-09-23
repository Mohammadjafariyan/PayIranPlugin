# Users

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the user. | [optional] 
**first_name** | **string** | First name of the user. | [optional] 
**last_name** | **string** | Last name of the user. | [optional] 
**email** | **string** | Unique email address for the user. | [optional] 
**password** | **string** | Password of the user. | [optional] 
**location** | **string** | The user&#x27;s location. | [optional] 
**title** | **string** | The user&#x27;s title. | [optional] 
**description** | **string** | The user&#x27;s description. | [optional] 
**tags** | **string[]** | The user&#x27;s tags. | [optional] 
**avatar** | [**OneOfUsersAvatar**](OneOfUsersAvatar.md) | The user&#x27;s avatar. | [optional] 
**language** | **string** | The user&#x27;s language used in Directus. | [optional] 
**theme** | **string** | What theme the user is using. | [optional] 
**tfa_secret** | **string** | The 2FA secret string that&#x27;s used to generate one time passwords. | [optional] 
**status** | **string** | Status of the user. | [optional] 
**role** | [**OneOfUsersRole**](OneOfUsersRole.md) | Unique identifier of the role of this user. | [optional] 
**token** | **string** | Static token for the user. | [optional] 
**last_access** | **string** |  | [optional] 
**last_page** | **string** | Last page that the user was on. | [optional] 
**provider** | **string** |  | [optional] 
**external_identifier** | **string** |  | [optional] 
**auth_data** | [****](.md) |  | [optional] 
**email_notifications** | **bool** |  | [optional] 
**preferences_divider** | **string** |  | [optional] 
**admin_divider** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

