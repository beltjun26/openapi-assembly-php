# OpenAPI\Client\AuthenticationApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**token()**](AuthenticationApi.md#token) | **POST** /tokens | Token


## `token()`

```php
token($tokens_request_body): \OpenAPI\Client\Model\TokensResponse
```

Token

Exchange client application credentials for a bearer token. Please ensure to call the auth issuing server as described at https://developer.assemblypayments.com/reference#authentication

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


$apiInstance = new OpenAPI\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tokens_request_body = new \OpenAPI\Client\Model\TokensRequestBody(); // \OpenAPI\Client\Model\TokensRequestBody

try {
    $result = $apiInstance->token($tokens_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->token: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tokens_request_body** | [**\OpenAPI\Client\Model\TokensRequestBody**](../Model/TokensRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\TokensResponse**](../Model/TokensResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
