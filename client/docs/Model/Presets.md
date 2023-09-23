# Presets

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for this single collection preset. | [optional] 
**bookmark** | **string** | Name for the bookmark. If this is set, the preset will be considered a bookmark. | [optional] 
**user** | [**OneOfPresetsUser**](OneOfPresetsUser.md) | The unique identifier of the user to whom this collection preset applies. | [optional] 
**role** | [**OneOfPresetsRole**](OneOfPresetsRole.md) | The unique identifier of a role in the platform. If &#x60;user&#x60; is null, this will be used to apply the collection preset or bookmark for all users in the role. | [optional] 
**collection** | [**OneOfPresetsCollection**](OneOfPresetsCollection.md) | What collection this collection preset is used for. | [optional] 
**search** | **string** | Search query. | [optional] 
**layout** | **string** | Key of the layout that is used. | [optional] 
**layout_query** | [****](.md) | Layout query that&#x27;s saved per layout type. Controls what data is fetched on load. These follow the same format as the JS SDK parameters. | [optional] 
**layout_options** | [****](.md) | Options of the views. The properties in here are controlled by the layout. | [optional] 
**refresh_interval** | **int** |  | [optional] 
**filter** | [****](.md) |  | [optional] 
**icon** | **string** |  | [optional] 
**color** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

