# OpenAPI\Client\BankAccountsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBankAccount()**](BankAccountsApi.md#createBankAccount) | **POST** /bank_accounts | Create Bank Account
[**redactBankAccount()**](BankAccountsApi.md#redactBankAccount) | **DELETE** /bank_accounts/{id} | Redact Bank Account
[**sendPennyAmount()**](BankAccountsApi.md#sendPennyAmount) | **PATCH** /bank_accounts/{id}/penny_send | Send Penny Amount
[**showBankAccount()**](BankAccountsApi.md#showBankAccount) | **GET** /bank_accounts/{id} | Show Bank Account
[**showBankAccountUser()**](BankAccountsApi.md#showBankAccountUser) | **GET** /bank_accounts/{id}/users | Show Bank Account User
[**validateRoutingNumber()**](BankAccountsApi.md#validateRoutingNumber) | **GET** /tools/routing_number | Validate Routing Number
[**verifyPennyAmount()**](BankAccountsApi.md#verifyPennyAmount) | **PATCH** /bank_accounts/{id}/penny_verify | Verify Penny Amount


## `createBankAccount()`

```php
createBankAccount($bank_account_request_body): \OpenAPI\Client\Model\BankAccount
```

Create Bank Account

Create a **Bank Account** to be used as either a funding source or a Disbursement destination. Store the returned `:id` and use it for a `make_payment` **Item Action** call. The `:id` is also referred to as a `token` when involving **Bank Accounts**.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account_request_body = new \OpenAPI\Client\Model\BankAccountRequestBody(); // \OpenAPI\Client\Model\BankAccountRequestBody

try {
    $result = $apiInstance->createBankAccount($bank_account_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->createBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bank_account_request_body** | [**\OpenAPI\Client\Model\BankAccountRequestBody**](../Model/BankAccountRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redactBankAccount()`

```php
redactBankAccount($id): \OpenAPI\Client\Model\BankAccountDeletion
```

Redact Bank Account

Redact a **Bank Account** using a given `:id`. Redacted **Bank Accounts** can no longer be used as a funding source or a Disbursement destination.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Bank account ID

try {
    $result = $apiInstance->redactBankAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->redactBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bank account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\BankAccountDeletion**](../Model/BankAccountDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendPennyAmount()`

```php
sendPennyAmount($id): \OpenAPI\Client\Model\BankAccount
```

Send Penny Amount

When penny verification is enabled, this API call sends two penny transactions to the specified bank account for verification. **Note**: This API call is not required when your platform has automatic penny verification enabled, as this is instead done by the system. Penny credit verification is only supported for US platforms.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Bank account ID

try {
    $result = $apiInstance->sendPennyAmount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->sendPennyAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bank account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showBankAccount()`

```php
showBankAccount($id): \OpenAPI\Client\Model\BankAccount
```

Show Bank Account

Show details of a specific **Bank Account** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Bank account ID

try {
    $result = $apiInstance->showBankAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->showBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bank account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showBankAccountUser()`

```php
showBankAccountUser($id): \OpenAPI\Client\Model\SingleUser
```

Show Bank Account User

Show the **User** the **Bank Account** is associated with using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 901d8cd0-6af3-0138-967d-0a58a9feac04; // string | Bank account ID

try {
    $result = $apiInstance->showBankAccountUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->showBankAccountUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bank account ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]

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

## `validateRoutingNumber()`

```php
validateRoutingNumber($routing_number): \OpenAPI\Client\Model\SingleRoutingNumber
```

Validate Routing Number

Validate a US bank routing number before creating an account. This can be used to provide on-demand verification, and further information of the bank information a User is providing.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routing_number = 122235821; // string | Bank account routing number

try {
    $result = $apiInstance->validateRoutingNumber($routing_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->validateRoutingNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **routing_number** | **string**| Bank account routing number | [default to &#39;122235821&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleRoutingNumber**](../Model/SingleRoutingNumber.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyPennyAmount()`

```php
verifyPennyAmount($id, $penny_verify_request_body): BankAccount
```

Verify Penny Amount

When penny verification is enabled, this API call verifies the two penny transactions that were sent to a specified bank account using **Send Penny Amount**. **Note**: This API call requires you to provide a front-end interface to your end-users into which they can input the penny amounts required for a successful verification. Your front-end interface should then pass the information into this API call. Penny credit verification is only supported for US platforms.

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


$apiInstance = new OpenAPI\Client\Api\BankAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Bank account ID
$penny_verify_request_body = new \OpenAPI\Client\Model\PennyVerifyRequestBody(); // \OpenAPI\Client\Model\PennyVerifyRequestBody

try {
    $result = $apiInstance->verifyPennyAmount($id, $penny_verify_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountsApi->verifyPennyAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Bank account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]
 **penny_verify_request_body** | [**\OpenAPI\Client\Model\PennyVerifyRequestBody**](../Model/PennyVerifyRequestBody.md)|  |

### Return type

[**BankAccount**](../Model/BankAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
