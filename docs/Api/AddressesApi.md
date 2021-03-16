# OpenAPI\Client\AddressesApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**showAddress()**](AddressesApi.md#showAddress) | **GET** /addresses/{id} | Show Address


## `showAddress()`

```php
showAddress($id): \OpenAPI\Client\Model\Address
```

Show Address

Show details of a specific Address using a given address `:id`.

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


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Address ID

try {
    $result = $apiInstance->showAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->showAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Address ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\Address**](../Model/Address.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
