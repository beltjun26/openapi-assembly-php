# OpenAPI\Client\TransactionsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listTransactions()**](TransactionsApi.md#listTransactions) | **GET** /transactions | List Transactions
[**showTransaction()**](TransactionsApi.md#showTransaction) | **GET** /transactions/{id} | Show Transaction
[**showTransactionBankAccount()**](TransactionsApi.md#showTransactionBankAccount) | **GET** /transactions/{id}/bank_accounts | Show Transaction Bank Account
[**showTransactionCardAccount()**](TransactionsApi.md#showTransactionCardAccount) | **GET** /transactions/{id}/card_accounts | Show Transaction Card Account
[**showTransactionFees()**](TransactionsApi.md#showTransactionFees) | **GET** /transactions/{id}/fees | Show Transaction Fees
[**showTransactionUser()**](TransactionsApi.md#showTransactionUser) | **GET** /transactions/{id}/users | Show Transaction User
[**showTransactionWalletAccount()**](TransactionsApi.md#showTransactionWalletAccount) | **GET** /transactions/{id}/wallet_accounts | Show Transaction Wallet Account


## `listTransactions()`

```php
listTransactions($limit, $offset, $account_id, $item_id, $transaction_type, $transaction_type_method, $direction, $user_id): \OpenAPI\Client\Model\Transactions
```

List Transactions

Retrieve an ordered and paginated list of **Transactions**.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.
$account_id = ; // string | Bank, Card or Wallet Account ID.
$item_id = ; // string | Item ID
$transaction_type = 'transaction_type_example'; // string | The type of transaction. Options for querying are: payment, refund, disbursement, fee, deposit, withdrawal. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list
$transaction_type_method = ; // string | The method the transaction was carried out with. Options for querying are: direct_debit, credit_card, npp, bpay, wire_transfer, wallet_account_transfer, direct_credit, misc. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list
$direction = ; // string | Direction of the transaction.
$user_id = ; // string | User ID.

try {
    $result = $apiInstance->listTransactions($limit, $offset, $account_id, $item_id, $transaction_type, $transaction_type_method, $direction, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->listTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]
 **account_id** | **string**| Bank, Card or Wallet Account ID. | [optional]
 **item_id** | **string**| Item ID | [optional]
 **transaction_type** | **string**| The type of transaction. Options for querying are: payment, refund, disbursement, fee, deposit, withdrawal. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list | [optional]
 **transaction_type_method** | **string**| The method the transaction was carried out with. Options for querying are: direct_debit, credit_card, npp, bpay, wire_transfer, wallet_account_transfer, direct_credit, misc. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list | [optional]
 **direction** | **string**| Direction of the transaction. | [optional]
 **user_id** | **string**| User ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\Transactions**](../Model/Transactions.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showTransaction()`

```php
showTransaction($id): \OpenAPI\Client\Model\SingleTransaction
```

Show Transaction

Show details of a specific **Transaction** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 27b91b10-70eb-0138-ec44-0a58a9feac06; // string | Transaction ID

try {
    $result = $apiInstance->showTransaction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->showTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;27b91b10-70eb-0138-ec44-0a58a9feac06&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleTransaction**](../Model/SingleTransaction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showTransactionBankAccount()`

```php
showTransactionBankAccount($id): \OpenAPI\Client\Model\BankAccount
```

Show Transaction Bank Account

Show the **Bank Account** associated with the **Transaction** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aed53110-6f63-0138-ea83-0a58a9feac04; // string | Transaction ID

try {
    $result = $apiInstance->showTransactionBankAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->showTransactionBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;aed53110-6f63-0138-ea83-0a58a9feac04&#39;]

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

## `showTransactionCardAccount()`

```php
showTransactionCardAccount($id): \OpenAPI\Client\Model\CardAccount
```

Show Transaction Card Account

Show the **Card Account** associated with the **Transaction** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea36e48a-4638-4d1a-a345-e1a0a584df8b; // string | Transaction ID

try {
    $result = $apiInstance->showTransactionCardAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->showTransactionCardAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;ea36e48a-4638-4d1a-a345-e1a0a584df8b&#39;]

### Return type

[**\OpenAPI\Client\Model\CardAccount**](../Model/CardAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showTransactionFees()`

```php
showTransactionFees($id): \OpenAPI\Client\Model\Fees
```

Show Transaction Fees

Show the **Fees** associated with the **Transaction** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea36e48a-4638-4d1a-a345-e1a0a584df8b; // string | Transaction ID

try {
    $result = $apiInstance->showTransactionFees($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->showTransactionFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;ea36e48a-4638-4d1a-a345-e1a0a584df8b&#39;]

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

## `showTransactionUser()`

```php
showTransactionUser($id): \OpenAPI\Client\Model\SingleUser
```

Show Transaction User

Show the **User** associated with the **Transaction** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 901d8cd0-6af3-0138-967d-0a58a9feac04; // string | Transaction ID

try {
    $result = $apiInstance->showTransactionUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->showTransactionUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]

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

## `showTransactionWalletAccount()`

```php
showTransactionWalletAccount($id): \OpenAPI\Client\Model\WalletAccount
```

Show Transaction Wallet Account

Show the **Wallet Account** associated with the **Transaction** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = ea36e48a-4638-4d1a-a345-e1a0a584df8b; // string | Transaction ID

try {
    $result = $apiInstance->showTransactionWalletAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->showTransactionWalletAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;ea36e48a-4638-4d1a-a345-e1a0a584df8b&#39;]

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
