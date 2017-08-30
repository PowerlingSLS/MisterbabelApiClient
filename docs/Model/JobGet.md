# JobGet

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**job_id** | **string** | Unique job ID | 
**job_reference** | **string** | Unique job reference | 
**custom_reference** | **string** | Your custom reference | 
**lc_source** | **string** | Language code of the source text | 
**lc_target** | **string** | Language code of the target text | 
**creation_time** | **int** | Timestamp of the creation date | 
**delivery_time** | **int** | If the translation is not delivered the value is 0. If the translation was delivered it will be set with the timestamp it was delivered. | 
**title** | **string** | The title of your job. | 
**comment** | **string** | The comment of your job, which will be visible to the translator | 
**word_count** | **int** | Number of word to translate | 
**file_url_source** | **string** | The file you want to translate, it must be in xml format. | 
**file_url_target** | **string** | The file translated | 
**callback_url** | **string** | The URL we will use to transmit your translation automatically | 
**review** | **bool** | Specify if the translation should be verified by another translator | 
**domain** | **int** | Specify the domain of the source text | 
**text_type** | **int** | Specify the text type of the source text | 
**status** | **string** | The status of your translation | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


