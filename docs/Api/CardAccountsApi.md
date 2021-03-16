# OpenAPI\Client\CardAccountsApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCardAccount()**](CardAccountsApi.md#createCardAccount) | **POST** /card_accounts | Create Card Account
[**redactCardAccount()**](CardAccountsApi.md#redactCardAccount) | **DELETE** /card_accounts/{id} | Redact Card Account
[**showCardAccount()**](CardAccountsApi.md#showCardAccount) | **GET** /card_accounts/{id} | Show Card Account
[**showCardAccountUser()**](CardAccountsApi.md#showCardAccountUser) | **GET** /card_accounts/{id}/users | Show Card Account User
[**verifyCard()**](CardAccountsApi.md#verifyCard) | **PATCH** /card_accounts/{id}/verify | Verify Card


## `createCardAccount()`

```php
createCardAccount($card_account_request_body): \OpenAPI\Client\Model\CardAccount
```

Create Card Account

Create a Credit **Card Account** to be used as a funding source. Store the returned `:id` and use it for a `make_payment` **Item Action** call. The `:id` is also referred to as a **token** when involving Credit Cards.

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


$apiInstance = new OpenAPI\Client\Api\CardAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$card_account_request_body = new \OpenAPI\Client\Model\CardAccountRequestBody(); // \OpenAPI\Client\Model\CardAccountRequestBody

try {
    $result = $apiInstance->createCardAccount($card_account_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountsApi->createCardAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **card_account_request_body** | [**\OpenAPI\Client\Model\CardAccountRequestBody**](../Model/CardAccountRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\CardAccount**](../Model/CardAccount.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redactCardAccount()`

```php
redactCardAccount($id): \OpenAPI\Client\Model\CardAccountDeletion
```

Redact Card Account

Redact a Credit **Card Account** using a given `:id`. Redacted Credit **Card Accounts** can no longer be used as a funding source.

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


$apiInstance = new OpenAPI\Client\Api\CardAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | ID of the card account to be deleted

try {
    $result = $apiInstance->redactCardAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountsApi->redactCardAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| ID of the card account to be deleted | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\CardAccountDeletion**](../Model/CardAccountDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showCardAccount()`

```php
showCardAccount($id): \OpenAPI\Client\Model\CardAccount
```

Show Card Account

Show details of a specific Credit **Card Account** using a given `:id`. You can toggle the card account number display to show the first 6 digits in addition to the last 4 digits. Contact Assembly if you want to toggle the card account display.

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


$apiInstance = new OpenAPI\Client\Api\CardAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Card account ID

try {
    $result = $apiInstance->showCardAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountsApi->showCardAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

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

## `showCardAccountUser()`

```php
showCardAccountUser($id): \OpenAPI\Client\Model\SingleUser
```

Show Card Account User

Show the **User** the Credit **Card Account** is associated with using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CardAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 901d8cd0-6af3-0138-967d-0a58a9feac04; // string | Card account ID

try {
    $result = $apiInstance->showCardAccountUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountsApi->showCardAccountUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card account ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]

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

## `verifyCard()`

```php
verifyCard($id): \OpenAPI\Client\Model\CardAccount
```

Verify Card

Where pre-authorization is enabled on a platform, verifies a **Card Account** when a **Card Account** is successfully verified, its verification status is `verified`.

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


$apiInstance = new OpenAPI\Client\Api\CardAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Card account ID

try {
    $result = $apiInstance->verifyCard($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardAccountsApi->verifyCard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Card account ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

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
