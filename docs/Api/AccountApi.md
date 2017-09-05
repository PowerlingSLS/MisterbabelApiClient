# Swagger\Client\AccountApi

All URIs are relative to *https://misterbabel.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountMeGet**](AccountApi.md#accountMeGet) | **GET** /account/me | Get your account information


# **accountMeGet**
> \Swagger\Client\Model\User1 accountMeGet()

Get your account information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKeyAuth
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Auth-Token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Auth-Token', 'Bearer');

$api_instance = new Swagger\Client\Api\AccountApi();

try {
    $result = $api_instance->accountMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountMeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\User1**](../Model/User1.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

