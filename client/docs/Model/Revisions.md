# Revisions

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the revision. | [optional] 
**activity** | [**OneOfRevisionsActivity**](OneOfRevisionsActivity.md) | Unique identifier for the activity record. | [optional] 
**collection** | [**OneOfRevisionsCollection**](OneOfRevisionsCollection.md) | Collection of the updated item. | [optional] 
**item** | **string** | Primary key of updated item. | [optional] 
**data** | **object** | Copy of item state at time of update. | [optional] 
**delta** | **object** | Changes between the previous and the current revision. | [optional] 
**parent** | **int** | If the current item was updated relationally, this is the id of the parent revision record | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

