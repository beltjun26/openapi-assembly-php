# OpenAPI\Client\ItemsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItem()**](ItemsApi.md#createItem) | **POST** /items | Create Item
[**deleteItem()**](ItemsApi.md#deleteItem) | **DELETE** /items/{id} | Delete Item
[**listItemBatchTransactions()**](ItemsApi.md#listItemBatchTransactions) | **GET** /items/{id}/batch_transactions | List Item Batch Transactions
[**listItemTransactions()**](ItemsApi.md#listItemTransactions) | **GET** /items/{id}/transactions | List Item Transactions
[**listItems()**](ItemsApi.md#listItems) | **GET** /items | List Items
[**showItem()**](ItemsApi.md#showItem) | **GET** /items/{id} | Show Item
[**showItemBuyer()**](ItemsApi.md#showItemBuyer) | **GET** /items/{id}/buyers | Show Item Buyer
[**showItemFees()**](ItemsApi.md#showItemFees) | **GET** /items/{id}/fees | Show Item Fees
[**showItemSeller()**](ItemsApi.md#showItemSeller) | **GET** /items/{id}/sellers | Show Item Seller
[**showItemStatus()**](ItemsApi.md#showItemStatus) | **GET** /items/{id}/status | Show Item Status
[**showItemWireDetails()**](ItemsApi.md#showItemWireDetails) | **GET** /items/{id}/wire_details | Show Item Wire Details
[**updateItem()**](ItemsApi.md#updateItem) | **PATCH** /items/{id} | Update Item


## `createItem()`

```php
createItem($item_request_body): \OpenAPI\Client\Model\SingleItem
```

Create Item

Create an **Item**. Items require two **Users**, a buyer and a seller. The `buyer_id` and `seller_id` are your unique user identifiers.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_request_body = new \OpenAPI\Client\Model\ItemRequestBody(); // \OpenAPI\Client\Model\ItemRequestBody

try {
    $result = $apiInstance->createItem($item_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->createItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_request_body** | [**\OpenAPI\Client\Model\ItemRequestBody**](../Model/ItemRequestBody.md)|  |

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

## `deleteItem()`

```php
deleteItem($id): \OpenAPI\Client\Model\SingleItem
```

Delete Item

Delete an existing **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->deleteItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItem: ', $e->getMessage(), PHP_EOL;
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

## `listItemBatchTransactions()`

```php
listItemBatchTransactions($id): \OpenAPI\Client\Model\ListBatchTransactions
```

List Item Batch Transactions

Retrieve an ordered and paginated list of **Batch Transactions** associated with the `Item` using a given `:id`. This will include both direct debits coming in, and the disbursements going out.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7139651-1-2046; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->listItemBatchTransactions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->listItemBatchTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7139651-1-2046&#39;]

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

## `listItemTransactions()`

```php
listItemTransactions($id): \OpenAPI\Client\Model\Transactions
```

List Item Transactions

Retrieve an ordered and paginated list of **Transactions** associated with the **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190985-1-9382; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->listItemTransactions($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->listItemTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190985-1-9382&#39;]

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

## `listItems()`

```php
listItems($search, $offset, $limit, $created_before, $created_after): \OpenAPI\Client\Model\Items
```

List Items

OK

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = ; // string | A text value to be used for searching within the item description
$offset = 0; // int | Number of records to offset. Required for pagination.
$limit = 10; // int | Number of records to retrieve. Up to 200.
$created_before = ; // string | Date and time in ISO 8601 format the item(s) were created before (e.g. 2020-02-27T23:54:59Z)
$created_after = ; // string | Date and time in ISO 8601 format the item(s) were created after (e.g. 2020-02-27T23:54:59Z)

try {
    $result = $apiInstance->listItems($search, $offset, $limit, $created_before, $created_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->listItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| A text value to be used for searching within the item description |
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **created_before** | **string**| Date and time in ISO 8601 format the item(s) were created before (e.g. 2020-02-27T23:54:59Z) | [optional]
 **created_after** | **string**| Date and time in ISO 8601 format the item(s) were created after (e.g. 2020-02-27T23:54:59Z) | [optional]

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

## `showItem()`

```php
showItem($id): \OpenAPI\Client\Model\SingleItem
```

Show Item

Show details of a specific **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->showItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->showItem: ', $e->getMessage(), PHP_EOL;
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

## `showItemBuyer()`

```php
showItemBuyer($id): \OpenAPI\Client\Model\SingleUser
```

Show Item Buyer

Show the buyer **User** associated with the **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190973-1-3780; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->showItemBuyer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->showItemBuyer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190973-1-3780&#39;]

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

## `showItemFees()`

```php
showItemFees($id): \OpenAPI\Client\Model\Fees
```

Show Item Fees

Show the **Fees** associated with the **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190973-1-3780; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->showItemFees($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->showItemFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190973-1-3780&#39;]

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

## `showItemSeller()`

```php
showItemSeller($id): \OpenAPI\Client\Model\SingleUser
```

Show Item Seller

Show the seller **User** associated with the **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190973-1-3780; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->showItemSeller($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->showItemSeller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190973-1-3780&#39;]

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

## `showItemStatus()`

```php
showItemStatus($id): \OpenAPI\Client\Model\SingleStatus
```

Show Item Status

Show the status of an **Item** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7139651-1-2046; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->showItemStatus($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->showItemStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7139651-1-2046&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleStatus**](../Model/SingleStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showItemWireDetails()`

```php
showItemWireDetails($id): \OpenAPI\Client\Model\SingleWireDetailsWithId
```

Show Item Wire Details

Show the **Item** wire payment details using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190985-1-9382; // string | Marketplace / Platform item ID

try {
    $result = $apiInstance->showItemWireDetails($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->showItemWireDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Marketplace / Platform item ID | [default to &#39;7190985-1-9382&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleWireDetailsWithId**](../Model/SingleWireDetailsWithId.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItem()`

```php
updateItem($id, $update_item_request_body): \OpenAPI\Client\Model\SingleItem
```

Update Item

Update an existing **Items** attributes using a given `:id`. Note: An item can only be updated if it’s in `pending` state. Once an item has begun a payment process, you cannot update it.

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


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 7190770-1-2908; // string | Item ID
$update_item_request_body = new \OpenAPI\Client\Model\UpdateItemRequestBody(); // \OpenAPI\Client\Model\UpdateItemRequestBody

try {
    $result = $apiInstance->updateItem($id, $update_item_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Item ID | [default to &#39;7190770-1-2908&#39;]
 **update_item_request_body** | [**\OpenAPI\Client\Model\UpdateItemRequestBody**](../Model/UpdateItemRequestBody.md)|  |

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
