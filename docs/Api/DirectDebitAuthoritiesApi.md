# OpenAPI\Client\DirectDebitAuthoritiesApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDirectDebitAuthority()**](DirectDebitAuthoritiesApi.md#createDirectDebitAuthority) | **POST** /direct_debit_authorities | Create Direct Debit Authority
[**listDirectDebitAuthorities()**](DirectDebitAuthoritiesApi.md#listDirectDebitAuthorities) | **GET** /direct_debit_authorities | List Direct Debit Authorities
[**showDirectDebitAuthority()**](DirectDebitAuthoritiesApi.md#showDirectDebitAuthority) | **GET** /direct_debit_authorities/{id} | Show Direct Debit Authority


## `createDirectDebitAuthority()`

```php
createDirectDebitAuthority($direct_debit_authority_request_body): \OpenAPI\Client\Model\SingleDirectDebitAuthority
```

Create Direct Debit Authority

Create a **Direct Debit Authority** associated with a **Bank Account**. The **Direct Debit Authority** is required to use a **Bank Account** as a funding source (Direct Debit/ACH).

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


$apiInstance = new OpenAPI\Client\Api\DirectDebitAuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$direct_debit_authority_request_body = new \OpenAPI\Client\Model\DirectDebitAuthorityRequestBody(); // \OpenAPI\Client\Model\DirectDebitAuthorityRequestBody

try {
    $result = $apiInstance->createDirectDebitAuthority($direct_debit_authority_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitAuthoritiesApi->createDirectDebitAuthority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direct_debit_authority_request_body** | [**\OpenAPI\Client\Model\DirectDebitAuthorityRequestBody**](../Model/DirectDebitAuthorityRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleDirectDebitAuthority**](../Model/SingleDirectDebitAuthority.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDirectDebitAuthorities()`

```php
listDirectDebitAuthorities($account_id, $limit, $offset): \OpenAPI\Client\Model\ListDirectDebitAuthorities
```

List Direct Debit Authorities

Retrieve an ordered and paginated list of existing **Direct Debit Authorities**.

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


$apiInstance = new OpenAPI\Client\Api\DirectDebitAuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = a2463ce3-229b-4da1-8a07-93366c1092c9; // string | Bank account ID
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->listDirectDebitAuthorities($account_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitAuthoritiesApi->listDirectDebitAuthorities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **string**| Bank account ID | [default to &#39;a2463ce3-229b-4da1-8a07-93366c1092c9&#39;]
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\ListDirectDebitAuthorities**](../Model/ListDirectDebitAuthorities.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showDirectDebitAuthority()`

```php
showDirectDebitAuthority($id): \OpenAPI\Client\Model\SingleDirectDebitAuthority
```

Show Direct Debit Authority

Show details of a specific **Direct Debit Authority** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\DirectDebitAuthoritiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 57abfd04-2ccb-4d55-8bd3-6f1a24a6ea47; // string | Direct debit authority ID

try {
    $result = $apiInstance->showDirectDebitAuthority($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectDebitAuthoritiesApi->showDirectDebitAuthority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Direct debit authority ID | [default to &#39;57abfd04-2ccb-4d55-8bd3-6f1a24a6ea47&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleDirectDebitAuthority**](../Model/SingleDirectDebitAuthority.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
