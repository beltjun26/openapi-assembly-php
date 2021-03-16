# OpenAPI\Client\BatchTransactionsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**listBatchTransactions()**](BatchTransactionsApi.md#listBatchTransactions) | **GET** /batch_transactions | List Batch Transactions
[**showBatchTransaction()**](BatchTransactionsApi.md#showBatchTransaction) | **GET** /batch_transactions/{id} | Show Batch Transaction


## `listBatchTransactions()`

```php
listBatchTransactions($limit, $offset, $account_id, $batch_id, $item_id, $transaction_type, $transaction_type_method, $direction, $created_before, $created_after, $disbursement_bank): \OpenAPI\Client\Model\ListBatchTransactions
```

List Batch Transactions

Retrieve an ordered and paginated list of existing **Batch Transactions**. The list can be filtered by **Account**, **Batch ID**, **Item**, and **Transaction Type**.

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


$apiInstance = new OpenAPI\Client\Api\BatchTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.
$account_id = ; // string | Bank, Card or Wallet Account ID.
$batch_id = ; // string | Batch ID. This appears on a bank reference.
$item_id = ; // string | Item ID
$transaction_type = 'transaction_type_example'; // string | The type of transaction. Options for querying are: payment, refund, disbursement, fee, deposit, withdrawal. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list
$transaction_type_method = ; // string | The method the transaction was carried out with. Options for querying are: direct_debit, credit_card, npp, bpay, wire_transfer, wallet_account_transfer, direct_credit, misc. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list
$direction = ; // string | Direction of the transaction. Options are debit, credit
$created_before = ; // string | Date and time in ISO 8601 format the item(s) were created before (e.g. 2020-02-27T23:54:59Z)
$created_after = ; // string | Date and time in ISO 8601 format the item(s) were created after (e.g. 2020-02-27T23:54:59Z)
$disbursement_bank = any; // string | The bank used for disbursing the payment. Please use a default value of `any`

try {
    $result = $apiInstance->listBatchTransactions($limit, $offset, $account_id, $batch_id, $item_id, $transaction_type, $transaction_type_method, $direction, $created_before, $created_after, $disbursement_bank);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchTransactionsApi->listBatchTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]
 **account_id** | **string**| Bank, Card or Wallet Account ID. | [optional]
 **batch_id** | **string**| Batch ID. This appears on a bank reference. | [optional]
 **item_id** | **string**| Item ID | [optional]
 **transaction_type** | **string**| The type of transaction. Options for querying are: payment, refund, disbursement, fee, deposit, withdrawal. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list | [optional]
 **transaction_type_method** | **string**| The method the transaction was carried out with. Options for querying are: direct_debit, credit_card, npp, bpay, wire_transfer, wallet_account_transfer, direct_credit, misc. For returned values please refer here: [Enumeration Values](https://developer.assemblypayments.com/docs/enumeration-values) for the full list | [optional]
 **direction** | **string**| Direction of the transaction. Options are debit, credit | [optional]
 **created_before** | **string**| Date and time in ISO 8601 format the item(s) were created before (e.g. 2020-02-27T23:54:59Z) | [optional]
 **created_after** | **string**| Date and time in ISO 8601 format the item(s) were created after (e.g. 2020-02-27T23:54:59Z) | [optional]
 **disbursement_bank** | **string**| The bank used for disbursing the payment. Please use a default value of &#x60;any&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\ListBatchTransactions**](../Model/ListBatchTransactions.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showBatchTransaction()`

```php
showBatchTransaction($id): \OpenAPI\Client\Model\SingleBatchTransaction
```

Show Batch Transaction

Get a batch transaction using its ID

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


$apiInstance = new OpenAPI\Client\Api\BatchTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 90c1418b-f4f4-413e-a4ba-f29c334e7f55; // string | Transaction ID

try {
    $result = $apiInstance->showBatchTransaction($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchTransactionsApi->showBatchTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Transaction ID | [default to &#39;90c1418b-f4f4-413e-a4ba-f29c334e7f55&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleBatchTransaction**](../Model/SingleBatchTransaction.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
