# OpenAPI\Client\WalletAccountsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**billPayment()**](WalletAccountsApi.md#billPayment) | **POST** /wallet_accounts/{id}/bill_payment | Pay a Bill
[**depositFunds()**](WalletAccountsApi.md#depositFunds) | **POST** /wallet_accounts/{id}/deposit | Deposit Funds
[**showWalletAccount()**](WalletAccountsApi.md#showWalletAccount) | **GET** /wallet_accounts/{id} | Show Wallet Account
[**showWalletAccountNBPAYDetails()**](WalletAccountsApi.md#showWalletAccountNBPAYDetails) | **GET** /wallet_accounts/{id}/bpay_details | Show Wallet Account BPAY Details
[**showWalletAccountNPPDetails()**](WalletAccountsApi.md#showWalletAccountNPPDetails) | **GET** /wallet_accounts/{id}/npp_details | Show Wallet Account NPP Details
[**showWalletAccountUser()**](WalletAccountsApi.md#showWalletAccountUser) | **GET** /wallet_accounts/{id}/users | Show Wallet Account User
[**withdrawFunds()**](WalletAccountsApi.md#withdrawFunds) | **POST** /wallet_accounts/{id}/withdraw | Withdraw Funds


## `billPayment()`

```php
billPayment($id, $bill_payment_request_body): \OpenAPI\Client\Model\SingleDisbursement
```

Pay a Bill

Pay a bill by withdrawing funds from a **Wallet Account** to a specified bpay account.

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 8a31ebfa-421b-4cbb-9241-632f71b3778a; // string | Account ID
$bill_payment_request_body = new \OpenAPI\Client\Model\BillPaymentRequestBody(); // \OpenAPI\Client\Model\BillPaymentRequestBody

try {
    $result = $apiInstance->billPayment($id, $bill_payment_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->billPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Account ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]
 **bill_payment_request_body** | [**\OpenAPI\Client\Model\BillPaymentRequestBody**](../Model/BillPaymentRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleDisbursement**](../Model/SingleDisbursement.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depositFunds()`

```php
depositFunds($id, $deposit_request_body): \OpenAPI\Client\Model\SingleDisbursement
```

Deposit Funds

Deposit funds to a **Wallet Account** from a specified payment account.

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = bd6e9c20-73f1-0138-fb91-0a58a9feac09; // string | Wallent account ID
$deposit_request_body = new \OpenAPI\Client\Model\DepositRequestBody(); // \OpenAPI\Client\Model\DepositRequestBody

try {
    $result = $apiInstance->depositFunds($id, $deposit_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->depositFunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallent account ID | [default to &#39;bd6e9c20-73f1-0138-fb91-0a58a9feac09&#39;]
 **deposit_request_body** | [**\OpenAPI\Client\Model\DepositRequestBody**](../Model/DepositRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleDisbursement**](../Model/SingleDisbursement.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showWalletAccount()`

```php
showWalletAccount($id): \OpenAPI\Client\Model\WalletAccount
```

Show Wallet Account

Show details of a specific **Wallet Account** using a given `:id.`

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 5c1c6b10-4c56-0137-8cd7-0242ac110002; // string | Account ID

try {
    $result = $apiInstance->showWalletAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->showWalletAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Account ID | [default to &#39;5c1c6b10-4c56-0137-8cd7-0242ac110002&#39;]

### Return type

[**\OpenAPI\Client\Model\WalletAccount**](../Model/WalletAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showWalletAccountNBPAYDetails()`

```php
showWalletAccountNBPAYDetails($id): \OpenAPI\Client\Model\WalletAccountBpayDetails
```

Show Wallet Account BPAY Details

Show BPAY details of a specific **Wallet Account** using a given `:id.`

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 5c1c6b10-4c56-0137-8cd7-0242ac110002; // string | Account ID

try {
    $result = $apiInstance->showWalletAccountNBPAYDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->showWalletAccountNBPAYDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Account ID | [default to &#39;5c1c6b10-4c56-0137-8cd7-0242ac110002&#39;]

### Return type

[**\OpenAPI\Client\Model\WalletAccountBpayDetails**](../Model/WalletAccountBpayDetails.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showWalletAccountNPPDetails()`

```php
showWalletAccountNPPDetails($id): \OpenAPI\Client\Model\WalletAccountNppDetails
```

Show Wallet Account NPP Details

Show NPP details of a specific **Wallet Account** using a given `:id.`

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 5c1c6b10-4c56-0137-8cd7-0242ac110002; // string | Account ID

try {
    $result = $apiInstance->showWalletAccountNPPDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->showWalletAccountNPPDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Account ID | [default to &#39;5c1c6b10-4c56-0137-8cd7-0242ac110002&#39;]

### Return type

[**\OpenAPI\Client\Model\WalletAccountNppDetails**](../Model/WalletAccountNppDetails.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showWalletAccountUser()`

```php
showWalletAccountUser($id): \OpenAPI\Client\Model\SingleUser
```

Show Wallet Account User

Show the **User** the **Wallet Account** is associated with using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 901d8cd0-6af3-0138-967d-0a58a9feac04; // string | Account ID

try {
    $result = $apiInstance->showWalletAccountUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->showWalletAccountUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Account ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]

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

## `withdrawFunds()`

```php
withdrawFunds($id, $withdraw_request_body): \OpenAPI\Client\Model\SingleDisbursement
```

Withdraw Funds

Withdraw funds from a **Wallet Account** to a specified disbursement account.

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


$apiInstance = new OpenAPI\Client\Api\WalletAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = bd6e9c20-73f1-0138-fb91-0a58a9feac09; // string | Wallet account ID
$withdraw_request_body = new \OpenAPI\Client\Model\WithdrawRequestBody(); // \OpenAPI\Client\Model\WithdrawRequestBody

try {
    $result = $apiInstance->withdrawFunds($id, $withdraw_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletAccountsApi->withdrawFunds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Wallet account ID | [default to &#39;bd6e9c20-73f1-0138-fb91-0a58a9feac09&#39;]
 **withdraw_request_body** | [**\OpenAPI\Client\Model\WithdrawRequestBody**](../Model/WithdrawRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleDisbursement**](../Model/SingleDisbursement.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
