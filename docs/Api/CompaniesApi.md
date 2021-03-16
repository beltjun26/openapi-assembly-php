# OpenAPI\Client\CompaniesApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCompany()**](CompaniesApi.md#createCompany) | **POST** /companies | Create Company
[**listCompanies()**](CompaniesApi.md#listCompanies) | **GET** /companies | List Companies
[**showCompany()**](CompaniesApi.md#showCompany) | **GET** /companies/{id} | Show Company
[**updateCompany()**](CompaniesApi.md#updateCompany) | **PATCH** /companies/{id} | Update Company


## `createCompany()`

```php
createCompany($company_request_body): \OpenAPI\Client\Model\SingleCompany
```

Create Company

Create a **Company** associated with the **User** using a given `user_id`. **Note**: Some parameters are required for user verification. See our guide on [Onboarding a Payout User/Seller](https://developer.assemblypayments.com/docs/onboarding-a-pay-out-user) for more information.

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


$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_request_body = new \OpenAPI\Client\Model\CompanyRequestBody(); // \OpenAPI\Client\Model\CompanyRequestBody

try {
    $result = $apiInstance->createCompany($company_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **company_request_body** | [**\OpenAPI\Client\Model\CompanyRequestBody**](../Model/CompanyRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleCompany**](../Model/SingleCompany.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanies()`

```php
listCompanies($limit, $offset): \OpenAPI\Client\Model\SimpleCompanies
```

List Companies

Retrieve an ordered and paginated list of existing **Companies**.

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


$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->listCompanies($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->listCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\SimpleCompanies**](../Model/SimpleCompanies.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showCompany()`

```php
showCompany($id): \OpenAPI\Client\Model\SingleCompany
```

Show Company

Show details of a specific **Company** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Company ID

try {
    $result = $apiInstance->showCompany($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->showCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Company ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleCompany**](../Model/SingleCompany.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompany()`

```php
updateCompany($id, $company_request_body): \OpenAPI\Client\Model\SingleCompany
```

Update Company

Update an existing **Company** attributes using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Company ID
$company_request_body = new \OpenAPI\Client\Model\CompanyRequestBody(); // \OpenAPI\Client\Model\CompanyRequestBody

try {
    $result = $apiInstance->updateCompany($id, $company_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->updateCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Company ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]
 **company_request_body** | [**\OpenAPI\Client\Model\CompanyRequestBody**](../Model/CompanyRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleCompany**](../Model/SingleCompany.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
