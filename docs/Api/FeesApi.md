# OpenAPI\Client\FeesApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFee()**](FeesApi.md#createFee) | **POST** /fees | Create fee
[**listFees()**](FeesApi.md#listFees) | **GET** /fees | List Fees
[**showFee()**](FeesApi.md#showFee) | **GET** /fees/{id} | Show Fee


## `createFee()`

```php
createFee($fee_request_body): \OpenAPI\Client\Model\SingleFee
```

Create fee

Create a **Fee** to be associated with an **Item**. **Fees** will add or subtract from the **Item** amount based on the **User**, payment type or Disbursement account type. **Fees** can be `Fixed` or `Percentage` based. **Fees** can be capped, have a maximum amount and/or a minimum amount.

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


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fee_request_body = new \OpenAPI\Client\Model\FeeRequestBody(); // \OpenAPI\Client\Model\FeeRequestBody

try {
    $result = $apiInstance->createFee($fee_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->createFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fee_request_body** | [**\OpenAPI\Client\Model\FeeRequestBody**](../Model/FeeRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleFee**](../Model/SingleFee.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFees()`

```php
listFees($limit, $offset): \OpenAPI\Client\Model\Fees
```

List Fees

Retrieve an ordered and paginated list of existing **Fees**.

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


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->listFees($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->listFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\Fees**](../Model/Fees.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showFee()`

```php
showFee($id, $item_amount): \OpenAPI\Client\Model\SingleFee
```

Show Fee

Show details of a specific **Fee** using a given `:id`. If the `item_amount` is specified, the response also shows the `calculated_fee` based on a percentage of the `item_amount`.

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


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1e5e372a-df3a-4f77-af2f-ec294b1715ce; // string | Fee ID
$item_amount = 200; // int | The cost of the item in cents on which the calculated Fee is based

try {
    $result = $apiInstance->showFee($id, $item_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->showFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Fee ID | [default to &#39;1e5e372a-df3a-4f77-af2f-ec294b1715ce&#39;]
 **item_amount** | **int**| The cost of the item in cents on which the calculated Fee is based |

### Return type

[**\OpenAPI\Client\Model\SingleFee**](../Model/SingleFee.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
