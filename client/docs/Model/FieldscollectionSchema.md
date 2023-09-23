# FieldscollectionSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the field. | [optional] 
**table** | **string** | The collection of the field. | [optional] 
**type** | **string** | The type of the field. | [optional] 
**default_value** | **string** | The default value of the field. | [optional] 
**max_length** | **int** | The max length of the field. | [optional] 
**is_nullable** | **bool** | If the field is nullable. | [optional] 
**is_primary_key** | **bool** | If the field is primary key. | [optional] 
**has_auto_increment** | **bool** | If the field has auto increment. | [optional] 
**foreign_key_column** | **string** | Related column from the foreign key constraint. | [optional] 
**foreign_key_table** | **string** | Related table from the foreign key constraint. | [optional] 
**comment** | **string** | Comment as saved in the database. | [optional] 
**schema** | **string** | Database schema (pg only). | [optional] 
**foreign_key_schema** | **string** | Related schema from the foreign key constraint (pg only). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

