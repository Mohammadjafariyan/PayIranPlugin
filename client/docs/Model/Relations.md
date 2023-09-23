# Relations

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the relation. | [optional] 
**many_collection** | **string** | Collection that has the field that holds the foreign key. | [optional] 
**many_field** | **string** | Foreign key. Field that holds the primary key of the related collection. | [optional] 
**one_collection** | **string** | Collection on the _one_ side of the relationship. | [optional] 
**one_field** | **string** | Alias column that serves as the _one_ side of the relationship. | [optional] 
**one_collection_field** | **string** |  | [optional] 
**one_allowed_collections** | **string[]** |  | [optional] 
**junction_field** | **string** | Field on the junction table that holds the many field of the related relation. | [optional] 
**sort_field** | **string** |  | [optional] 
**one_deselect_action** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

