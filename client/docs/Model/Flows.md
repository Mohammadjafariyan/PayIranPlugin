# Flows

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the flow. | [optional] 
**name** | **string** | The name of the flow. | [optional] 
**icon** | **string** | Icon displayed in the Admin App for the flow. | [optional] 
**color** | **string** | Color of the icon displayed in the Admin App for the flow. | [optional] 
**description** | **string** |  | [optional] 
**status** | **string** | Current status of the flow. | [optional] [default to 'active']
**trigger** | **string** | Type of trigger for the flow. One of &#x60;hook&#x60;, &#x60;webhook&#x60;, &#x60;operation&#x60;, &#x60;schedule&#x60;, &#x60;manual&#x60;. | [optional] 
**accountability** | **string** | The permission used during the flow. One of &#x60;$public&#x60;, &#x60;$trigger&#x60;, &#x60;$full&#x60;, or UUID of a role. | [optional] 
**options** | **object** | Options of the selected trigger for the flow. | [optional] 
**operation** | [**OneOfFlowsOperation**](OneOfFlowsOperation.md) | UUID of the operation connected to the trigger in the flow. | [optional] 
**date_created** | [**\DateTime**](\DateTime.md) | Timestamp in ISO8601 when the flow was created. | [optional] 
**user_created** | [**OneOfFlowsUserCreated**](OneOfFlowsUserCreated.md) | The user who created the flow. | [optional] 
**operations** | [**\Swagger\Client\Model\OneOfFlowsOperationsItems[]**](.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

