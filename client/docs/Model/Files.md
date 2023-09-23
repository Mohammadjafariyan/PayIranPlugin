# Files

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for the file. | [optional] 
**storage** | **string** | Where the file is stored. Either &#x60;local&#x60; for the local filesystem or the name of the storage adapter (for example &#x60;s3&#x60;). | [optional] 
**filename_disk** | **string** | Name of the file on disk. By default, Directus uses a random hash for the filename. | [optional] 
**filename_download** | **string** | How you want to the file to be named when it&#x27;s being downloaded. | [optional] 
**title** | **string** | Title for the file. Is extracted from the filename on upload, but can be edited by the user. | [optional] 
**type** | **string** | MIME type of the file. | [optional] 
**folder** | [**OneOfFilesFolder**](OneOfFilesFolder.md) | Virtual folder where this file resides in. | [optional] 
**uploaded_by** | [**OneOfFilesUploadedBy**](OneOfFilesUploadedBy.md) | Who uploaded the file. | [optional] 
**uploaded_on** | [**\DateTime**](\DateTime.md) | When the file was uploaded. | [optional] 
**modified_by** | [**OneOfFilesModifiedBy**](OneOfFilesModifiedBy.md) |  | [optional] 
**modified_on** | **string** |  | [optional] 
**charset** | **string** | Character set of the file. | [optional] 
**filesize** | **int** | Size of the file in bytes. | [optional] 
**width** | **int** | Width of the file in pixels. Only applies to images. | [optional] 
**height** | **int** | Height of the file in pixels. Only applies to images. | [optional] 
**duration** | **int** | Duration of the file in seconds. Only applies to audio and video. | [optional] 
**embed** | **string** | Where the file was embedded from. | [optional] 
**description** | **string** | Description for the file. | [optional] 
**location** | **string** | Where the file was created. Is automatically populated based on EXIF data for images. | [optional] 
**tags** | **string[]** | Tags for the file. Is automatically populated based on EXIF data for images. | [optional] 
**metadata** | **object** | IPTC, EXIF, and ICC metadata extracted from file | [optional] 
**storage_divider** | **string** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

