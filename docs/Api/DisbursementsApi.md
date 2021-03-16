# OpenAPI\Client\DisbursementsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listDisbursement()**](DisbursementsApi.md#listDisbursement) | **GET** /disbursements | List Disbursements
[**showDisbursement()**](DisbursementsApi.md#showDisbursement) | **GET** /disbursements/{id} | Show Disbursement
[**showDisbursementBankAccounts()**](DisbursementsApi.md#showDisbursementBankAccounts) | **GET** /disbursements/{id}/bank_accounts | Show Disbursement Bank Accounts
[**showDisbursementItems()**](DisbursementsApi.md#showDisbursementItems) | **GET** /disbursements/{id}/items | Show Disbursement Items
[**showDisbursementTransactions()**](DisbursementsApi.md#showDisbursementTransactions) | **GET** /disbursements/{id}/transactions | Show Disbursement Transactions
[**showDisbursementUsers()**](DisbursementsApi.md#showDisbursementUsers) | **GET** /disbursements/{id}/users | Show Disbursement Users
[**showDisbursementWalletAccounts()**](DisbursementsApi.md#showDisbursementWalletAccounts) | **GET** /disbursements/{id}/wallet_accounts | Show Disbursement Wallet Accounts


## `listDisbursement()`

```php
listDisbursement($limit, $offset, $batch_id): \OpenAPI\Client\Model\Disbursements
```

List Disbursements

Retrieve an ordered and paginated list of existing **Disbursements**. The list can be filtered by **Batch ID**.

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.
$batch_id = ; // string | Batch ID.

try {
    $result = $apiInstance->listDisbursement($limit, $offset, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->listDisbursement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]
 **batch_id** | **string**| Batch ID. | [optional]

### Return type

[**\OpenAPI\Client\Model\Disbursements**](../Model/Disbursements.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showDisbursement()`

```php
showDisbursement($id): \OpenAPI\Client\Model\SingleDisbursement
```

Show Disbursement

Get a disbursment using its ID

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Disbursement ID

try {
    $result = $apiInstance->showDisbursement($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->showDisbursement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Disbursement ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleDisbursement**](../Model/SingleDisbursement.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showDisbursementBankAccounts()`

```php
showDisbursementBankAccounts($id): \OpenAPI\Client\Model\BankAccount
```

Show Disbursement Bank Accounts

Get all the bank accounts relating to disbursement ID

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Disbursement ID

try {
    $result = $apiInstance->showDisbursementBankAccounts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->showDisbursementBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Disbursement ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]

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

## `showDisbursementItems()`

```php
showDisbursementItems($id): \OpenAPI\Client\Model\Items
```

Show Disbursement Items

Get all the items relating to a disbursement ID

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Disbursement ID

try {
    $result = $apiInstance->showDisbursementItems($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->showDisbursementItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Disbursement ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]

### Return type

[**\OpenAPI\Client\Model\Items**](../Model/Items.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showDisbursementTransactions()`

```php
showDisbursementTransactions($id, $limit, $offset): \OpenAPI\Client\Model\Transactions
```

Show Disbursement Transactions

Get all the transactions relating to a disbursment ID

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Disbursement ID
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->showDisbursementTransactions($id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->showDisbursementTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Disbursement ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

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

## `showDisbursementUsers()`

```php
showDisbursementUsers($id): \OpenAPI\Client\Model\SingleUser
```

Show Disbursement Users

Get all the users relating to disbursement ID

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Disbursement ID

try {
    $result = $apiInstance->showDisbursementUsers($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->showDisbursementUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Disbursement ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]

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

## `showDisbursementWalletAccounts()`

```php
showDisbursementWalletAccounts($id): \OpenAPI\Client\Model\WalletAccount
```

Show Disbursement Wallet Accounts

Get all the wallet accounts relating to a disbursment ID

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


$apiInstance = new OpenAPI\Client\Api\DisbursementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Disbursement ID

try {
    $result = $apiInstance->showDisbursementWalletAccounts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisbursementsApi->showDisbursementWalletAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Disbursement ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]

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
