# OpenAPI\Client\ChargesApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCharge()**](ChargesApi.md#createCharge) | **POST** /charges | Create Charge
[**listCharges()**](ChargesApi.md#listCharges) | **GET** /charges | List Charges
[**showCharge()**](ChargesApi.md#showCharge) | **GET** /charges/{id} | Show Charge
[**showChargeBuyer()**](ChargesApi.md#showChargeBuyer) | **GET** /charges/{id}/buyers | Show Charge Buyer
[**showChargeStatus()**](ChargesApi.md#showChargeStatus) | **GET** /charges/{id}/status | Show Charge Status


## `createCharge()`

```php
createCharge($charge_request_body): \OpenAPI\Client\Model\SingleCharge
```

Create Charge

Create a **Charge**. **Charges** require a specified **Card Account** or **Bank Account**. You may pass through an existing **User**, or define the `user_id` of the new user that will be associated with the **Charge** and the provided Account. The `user_id` can be left blank if you wish for a new user to be created for the **Charge**, or specified if you wish for a new **User** to be created with the passed `user_id`.

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


$apiInstance = new OpenAPI\Client\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_request_body = new \OpenAPI\Client\Model\ChargeRequestBody(); // \OpenAPI\Client\Model\ChargeRequestBody

try {
    $result = $apiInstance->createCharge($charge_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->createCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_request_body** | [**\OpenAPI\Client\Model\ChargeRequestBody**](../Model/ChargeRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleCharge**](../Model/SingleCharge.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCharges()`

```php
listCharges($limit, $offset): \OpenAPI\Client\Model\Charges
```

List Charges

Retrieve an ordered and paginated list of **Charges**.

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


$apiInstance = new OpenAPI\Client\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->listCharges($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->listCharges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\Charges**](../Model/Charges.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showCharge()`

```php
showCharge($id): \OpenAPI\Client\Model\SingleCharge
```

Show Charge

Show details of a specific **Charge** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4d7d73f5-c7f0-477d-aff8-7570d2c7e7d9; // string | Charge ID

try {
    $result = $apiInstance->showCharge($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->showCharge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID | [default to &#39;4d7d73f5-c7f0-477d-aff8-7570d2c7e7d9&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleCharge**](../Model/SingleCharge.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showChargeBuyer()`

```php
showChargeBuyer($id): \OpenAPI\Client\Model\SingleUser
```

Show Charge Buyer

Show the buyer **User** associated with the **Charge** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4d7d73f5-c7f0-477d-aff8-7570d2c7e7d9/buyers; // string | Charge ID

try {
    $result = $apiInstance->showChargeBuyer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->showChargeBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID | [default to &#39;4d7d73f5-c7f0-477d-aff8-7570d2c7e7d9/buyers&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleUser**](../Model/SingleUser.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showChargeStatus()`

```php
showChargeStatus($id): \OpenAPI\Client\Model\SingleChargeStatus
```

Show Charge Status

Show status of a specific **Charge** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ChargesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1e5e372a-df3a-4f77-af2f-ec294b1715ce; // string | Charge ID

try {
    $result = $apiInstance->showChargeStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargesApi->showChargeStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Charge ID | [default to &#39;1e5e372a-df3a-4f77-af2f-ec294b1715ce&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleChargeStatus**](../Model/SingleChargeStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
