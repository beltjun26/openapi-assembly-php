# OpenAPI\Client\ItemActionsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authorizePayment()**](ItemActionsApi.md#authorizePayment) | **PATCH** /items/{id}/authorize_payment | Authorize Payment
[**cancelItem()**](ItemActionsApi.md#cancelItem) | **PATCH** /items/{id}/cancel | Cancel
[**capturePayment()**](ItemActionsApi.md#capturePayment) | **PATCH** /items/{id}/capture_payment | Capture Payment
[**makePayment()**](ItemActionsApi.md#makePayment) | **PATCH** /items/{id}/make_payment | Make Payment
[**refund()**](ItemActionsApi.md#refund) | **PATCH** /items/{id}/refund | Refund
[**voidPayment()**](ItemActionsApi.md#voidPayment) | **PATCH** /items/{id}/void_payment | Void Payment


## `authorizePayment()`

```php
authorizePayment($id, $card_account_id_request_body): \OpenAPI\Client\Model\SingleItem
```

Authorize Payment

Where pre-authentication is enabled on a platform, initiates a credit card payment authorization for an item. When an authorization is successful, your platform holds the item amount for capture, but there is no transfer of funds happening. This call is used with the Capture Payment or Void Payment calls.

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


$apiInstance = new OpenAPI\Client\Api\ItemActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID
$card_account_id_request_body = new \OpenAPI\Client\Model\CardAccountIdRequestBody(); // \OpenAPI\Client\Model\CardAccountIdRequestBody

try {
    $result = $apiInstance->authorizePayment($id, $card_account_id_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActionsApi->authorizePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190770-1-2908&#39;]
 **card_account_id_request_body** | [**\OpenAPI\Client\Model\CardAccountIdRequestBody**](../Model/CardAccountIdRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleItem**](../Model/SingleItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelItem()`

```php
cancelItem($id): \OpenAPI\Client\Model\SingleItem
```

Cancel

Cancel an **Item**. This will transition the **Item** state to `cancelled`. **Items** can only be cancelled if they haven’t been actioned in any other way.

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


$apiInstance = new OpenAPI\Client\Api\ItemActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->cancelItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActionsApi->cancelItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190770-1-2908&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleItem**](../Model/SingleItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capturePayment()`

```php
capturePayment($id): \OpenAPI\Client\Model\SingleItem
```

Capture Payment

Where pre-authentication is enabled on a platform, completes a credit card payment for an item whose payment is authorized. This call is used with the Authorize Payment call.

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


$apiInstance = new OpenAPI\Client\Api\ItemActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->capturePayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActionsApi->capturePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190770-1-2908&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleItem**](../Model/SingleItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makePayment()`

```php
makePayment($id, $account_id_request_body): \OpenAPI\Client\Model\SingleItem
```

Make Payment

Make a payment for an **Item**. Pass the `:account_id` of a **Bank Account** or a **Card Account** associated with the **Item’s** buyer. The **Item** state will transition to one of `payment_held`, `payment_pending` or `completed` for an **Express** or **Approve** payment type.

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


$apiInstance = new OpenAPI\Client\Api\ItemActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID
$account_id_request_body = new \OpenAPI\Client\Model\AccountIdRequestBody(); // \OpenAPI\Client\Model\AccountIdRequestBody

try {
    $result = $apiInstance->makePayment($id, $account_id_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActionsApi->makePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190770-1-2908&#39;]
 **account_id_request_body** | [**\OpenAPI\Client\Model\AccountIdRequestBody**](../Model/AccountIdRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleItem**](../Model/SingleItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refund()`

```php
refund($id, $refund_request_body): \OpenAPI\Client\Model\SingleItem
```

Refund

Refund an **Item**’s funds. A partial `amount` can be specified otherwise the full amount will be refunded. This will transition the **Item** state to ‘refunded’ if the full amount is refunded, or to the previously held state if a partial `amount` is specified.

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


$apiInstance = new OpenAPI\Client\Api\ItemActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID to be refunded
$refund_request_body = new \OpenAPI\Client\Model\RefundRequestBody(); // \OpenAPI\Client\Model\RefundRequestBody

try {
    $result = $apiInstance->refund($id, $refund_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActionsApi->refund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID to be refunded | [default to &#39;7190770-1-2908&#39;]
 **refund_request_body** | [**\OpenAPI\Client\Model\RefundRequestBody**](../Model/RefundRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleItem**](../Model/SingleItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidPayment()`

```php
voidPayment($id): \OpenAPI\Client\Model\SingleItem
```

Void Payment

Where pre-authentication is enabled on a platform, voids the `payment_authorized` status for an item. This call is used with the Authorize Payment call. **Note**: Not all payment gateways support the Void Payment API call. In this case, you can wait until a payment authorization expires. A payment authorisation expires after 3 to 6 days if not captured.

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


$apiInstance = new OpenAPI\Client\Api\ItemActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->voidPayment($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemActionsApi->voidPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190770-1-2908&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleItem**](../Model/SingleItem.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
