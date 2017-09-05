# Swagger\Client\AuthenticationApi

All URIs are relative to *https://misterbabel.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authTokensPost**](AuthenticationApi.md#authTokensPost) | **POST** /auth-tokens | Authenticates a user


# **authTokensPost**
> \Swagger\Client\Model\AuthToken1 authTokensPost($credentials)

Authenticates a user

Creates a token that allows the user to access protected content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AuthenticationApi();
$credentials = new \Swagger\Client\Model\Credentials1(); // \Swagger\Client\Model\Credentials1 | Login and password of the user

try {
    $result = $api_instance->authTokensPost($credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authTokensPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\Swagger\Client\Model\Credentials1**](../Model/Credentials1.md)| Login and password of the user |

### Return type

[**\Swagger\Client\Model\AuthToken1**](../Model/AuthToken1.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

