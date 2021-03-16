# OpenAPI\Client\MarketplacesApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**showMarketplace()**](MarketplacesApi.md#showMarketplace) | **GET** /marketplace | Show Marketplace


## `showMarketplace()`

```php
showMarketplace(): \OpenAPI\Client\Model\Marketplace
```

Show Marketplace

Show details of your **Platform**, providing access to your configuration and related **User** and **Company**.

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


$apiInstance = new OpenAPI\Client\Api\MarketplacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->showMarketplace();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplacesApi->showMarketplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Marketplace**](../Model/Marketplace.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
