# Swagger\Client\TranslateApi

All URIs are relative to *https://misterbabel.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**translateJobIdDelete**](TranslateApi.md#translateJobIdDelete) | **DELETE** /translate/job/{id} | Delete a job
[**translateJobIdGet**](TranslateApi.md#translateJobIdGet) | **GET** /translate/job/{id} | Get information about a job
[**translateJobsGet**](TranslateApi.md#translateJobsGet) | **GET** /translate/jobs | Get all your translation jobs
[**translateJobsPost**](TranslateApi.md#translateJobsPost) | **POST** /translate/jobs | Create translation jobs


# **translateJobIdDelete**
> translateJobIdDelete($id)

Delete a job

Delete a job only if the status is still in pending

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$api_instance = new Swagger\Client\Api\TranslateApi();
$id = 56; // int | Id of the job

try {
    $api_instance->translateJobIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TranslateApi->translateJobIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the job |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **translateJobIdGet**
> \Swagger\Client\Model\GetJobs translateJobIdGet($id)

Get information about a job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$api_instance = new Swagger\Client\Api\TranslateApi();
$id = 56; // int | Id of the job

try {
    $result = $api_instance->translateJobIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslateApi->translateJobIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the job |

### Return type

[**\Swagger\Client\Model\GetJobs**](../Model/GetJobs.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **translateJobsGet**
> \Swagger\Client\Model\GetJobs[] translateJobsGet($offset, $limit, $status)

Get all your translation jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$api_instance = new Swagger\Client\Api\TranslateApi();
$offset = 56; // int | The number of jobs to skip before starting to collect the result set
$limit = 56; // int | The numbers of jobs to return
$status = "status_example"; // string | Filter jobs by status.

try {
    $result = $api_instance->translateJobsGet($offset, $limit, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslateApi->translateJobsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The number of jobs to skip before starting to collect the result set | [optional]
 **limit** | **int**| The numbers of jobs to return | [optional]
 **status** | **string**| Filter jobs by status. | [optional]

### Return type

[**\Swagger\Client\Model\GetJobs[]**](../Model/GetJobs.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **translateJobsPost**
> \Swagger\Client\Model\CreateJobs[] translateJobsPost($jobs)

Create translation jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$api_instance = new Swagger\Client\Api\TranslateApi();
$jobs = new \Swagger\Client\Model\CreateJobs1(); // \Swagger\Client\Model\CreateJobs1 | 

try {
    $result = $api_instance->translateJobsPost($jobs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranslateApi->translateJobsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobs** | [**\Swagger\Client\Model\CreateJobs1**](../Model/CreateJobs1.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CreateJobs[]**](../Model/CreateJobs.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

