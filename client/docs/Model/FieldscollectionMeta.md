# FieldscollectionMeta

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique identifier for the field in the &#x60;directus_fields&#x60; collection. | [optional] 
**collection** | **string** | Unique name of the collection this field is in. | [optional] 
**field** | **string** | Unique name of the field. Field name is unique within the collection. | [optional] 
**special** | **string[]** | Transformation flag for field | [optional] 
**system_interface** | **string** | What interface is used in the admin app to edit the value for this field. | [optional] 
**options** | **object** | Options for the interface that&#x27;s used. This format is based on the individual interface. | [optional] 
**display** | **string** | What display is used in the admin app to display the value for this field. | [optional] 
**display_options** | **object** | Options for the display that&#x27;s used. This format is based on the individual display. | [optional] 
**locked** | **bool** | If the field can be altered by the end user. Directus system fields have this value set to &#x60;true&#x60;. | [optional] 
**readonly** | **bool** | Prevents the user from editing the value in the field. | [optional] 
**hidden** | **bool** | If this field should be hidden. | [optional] 
**sort** | **int** | Sort order of this field on the edit page of the admin app. | [optional] 
**width** | **string** | Width of the field on the edit form. | [optional] 
**group** | **int** | What field group this field is part of. | [optional] 
**translation** | **object** | Key value pair of &#x60;&lt;language&gt;: &lt;translation&gt;&#x60; that allows the user to change the displayed name of the field in the admin app. | [optional] 
**note** | **string** | A user provided note for the field. Will be rendered alongside the interface on the edit page. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

