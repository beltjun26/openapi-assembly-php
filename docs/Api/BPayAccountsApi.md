# OpenAPI\Client\BPayAccountsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBPayAccount()**](BPayAccountsApi.md#createBPayAccount) | **POST** /bpay_accounts | Create BPay Account
[**redactBPayAccount()**](BPayAccountsApi.md#redactBPayAccount) | **DELETE** /bpay_accounts/{id} | Redact BPay Account (Future Feature)
[**showBPayAccount()**](BPayAccountsApi.md#showBPayAccount) | **GET** /bpay_accounts/{id} | Show BPay Account
[**showBPayAccountUser()**](BPayAccountsApi.md#showBPayAccountUser) | **GET** /bpay_accounts/{id}/users | Show BPay Account User


## `createBPayAccount()`

```php
createBPayAccount($bpay_account_request_body): \OpenAPI\Client\Model\BpayAccount
```

Create BPay Account

Create a **BPay Account** to be used as a Disbursement destination.

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


$apiInstance = new OpenAPI\Client\Api\BPayAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bpay_account_request_body = new \OpenAPI\Client\Model\BpayAccountRequestBody(); // \OpenAPI\Client\Model\BpayAccountRequestBody

try {
    $result = $apiInstance->createBPayAccount($bpay_account_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPayAccountsApi->createBPayAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bpay_account_request_body** | [**\OpenAPI\Client\Model\BpayAccountRequestBody**](../Model/BpayAccountRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\BpayAccount**](../Model/BpayAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redactBPayAccount()`

```php
redactBPayAccount($id): \OpenAPI\Client\Model\BpayAccountDeletion
```

Redact BPay Account (Future Feature)

Redact a **BPay Account** using a given `:id`. Redacted **BPay Accounts** can no longer be used as a Disbursement destination.

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


$apiInstance = new OpenAPI\Client\Api\BPayAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | BPay account ID

try {
    $result = $apiInstance->redactBPayAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPayAccountsApi->redactBPayAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| BPay account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\BpayAccountDeletion**](../Model/BpayAccountDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showBPayAccount()`

```php
showBPayAccount($id): \OpenAPI\Client\Model\BpayAccount
```

Show BPay Account

Show details of a specific **BPay Account** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\BPayAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | BPay account ID

try {
    $result = $apiInstance->showBPayAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPayAccountsApi->showBPayAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| BPay account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\BpayAccount**](../Model/BpayAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showBPayAccountUser()`

```php
showBPayAccountUser($id): \OpenAPI\Client\Model\SingleUser
```

Show BPay Account User

Show the **User** the **BPay Account** is associated with using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\BPayAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 901d8cd0-6af3-0138-967d-0a58a9feac04; // string | BPay account ID

try {
    $result = $apiInstance->showBPayAccountUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BPayAccountsApi->showBPayAccountUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| BPay account ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]

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
