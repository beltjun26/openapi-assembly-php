# OpenAPI\Client\TokenAuthApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateToken()**](TokenAuthApi.md#generateToken) | **POST** /token_auths | Generate Token


## `generateToken()`

```php
generateToken($token_auth_request_body): object
```

Generate Token

Create a token, either for a bank or a card account, that can be used with the **PromisePay.js** package to securely send Assembly credit card details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\TokenAuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_auth_request_body = new \OpenAPI\Client\Model\TokenAuthRequestBody(); // \OpenAPI\Client\Model\TokenAuthRequestBody

try {
    $result = $apiInstance->generateToken($token_auth_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokenAuthApi->generateToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_auth_request_body** | [**\OpenAPI\Client\Model\TokenAuthRequestBody**](../Model/TokenAuthRequestBody.md)|  |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
