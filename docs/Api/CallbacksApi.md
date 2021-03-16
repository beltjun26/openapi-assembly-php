# OpenAPI\Client\CallbacksApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCallback()**](CallbacksApi.md#createCallback) | **POST** /callbacks | Create Callback
[**deleteCallback()**](CallbacksApi.md#deleteCallback) | **DELETE** /callbacks/{id} | Delete Callback
[**listCallbackResponse()**](CallbacksApi.md#listCallbackResponse) | **GET** /callbacks/{id}/responses | List Callback Responses
[**listCallbacks()**](CallbacksApi.md#listCallbacks) | **GET** /callbacks | List Callbacks
[**showCallback()**](CallbacksApi.md#showCallback) | **GET** /callbacks/{id} | Show Callback
[**showCallbackResponse()**](CallbacksApi.md#showCallbackResponse) | **GET** /callbacks/{callback_id}/responses/{id} | Show Callback Response
[**updateCallback()**](CallbacksApi.md#updateCallback) | **PATCH** /callbacks/{id} | Update Callback


## `createCallback()`

```php
createCallback($callback_request_body): \OpenAPI\Client\Model\SingleCallback
```

Create Callback

Create a **Callback** to notify you at the `URL` when the `object_type` changes

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callback_request_body = new \OpenAPI\Client\Model\CallbackRequestBody(); // \OpenAPI\Client\Model\CallbackRequestBody

try {
    $result = $apiInstance->createCallback($callback_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->createCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callback_request_body** | [**\OpenAPI\Client\Model\CallbackRequestBody**](../Model/CallbackRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleCallback**](../Model/SingleCallback.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCallback()`

```php
deleteCallback($id): \OpenAPI\Client\Model\CallbackDeletion
```

Delete Callback

Delete an existing Callback using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Callback ID

try {
    $result = $apiInstance->deleteCallback($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->deleteCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Callback ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\CallbackDeletion**](../Model/CallbackDeletion.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCallbackResponse()`

```php
listCallbackResponse($id, $limit, $offset): \OpenAPI\Client\Model\ListCallbackResponses
```

List Callback Responses

Retrieve an ordered and paginated list of the responses garnered from a callback using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Callback ID
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->listCallbackResponse($id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->listCallbackResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Callback ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\ListCallbackResponses**](../Model/ListCallbackResponses.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCallbacks()`

```php
listCallbacks($limit, $offset, $filter): \OpenAPI\Client\Model\Callbacks
```

List Callbacks

Retrieve an ordered and paginated list of all created **Callbacks**.

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.
$filter = ; // string | Narrow down records to relevant character string

try {
    $result = $apiInstance->listCallbacks($limit, $offset, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->listCallbacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]
 **filter** | **string**| Narrow down records to relevant character string | [optional]

### Return type

[**\OpenAPI\Client\Model\Callbacks**](../Model/Callbacks.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showCallback()`

```php
showCallback($id): \OpenAPI\Client\Model\SingleCallback
```

Show Callback

Show details of a specific **Callback** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Callback ID

try {
    $result = $apiInstance->showCallback($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->showCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Callback ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleCallback**](../Model/SingleCallback.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showCallbackResponse()`

```php
showCallbackResponse($callback_id, $id): \OpenAPI\Client\Model\SingleCallbackResponse
```

Show Callback Response

Show details of a specific **Callback** response using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$callback_id = 088e4cf1-2508-4bd4-97ab-a78e4e869970; // string | Callback ID
$id = 0c9cbb28-0b98-4560-9c81-7a4ea6cde95b; // string | Callback response ID

try {
    $result = $apiInstance->showCallbackResponse($callback_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->showCallbackResponse: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **callback_id** | **string**| Callback ID | [default to &#39;088e4cf1-2508-4bd4-97ab-a78e4e869970&#39;]
 **id** | **string**| Callback response ID | [default to &#39;0c9cbb28-0b98-4560-9c81-7a4ea6cde95b&#39;]

### Return type

[**\OpenAPI\Client\Model\SingleCallbackResponse**](../Model/SingleCallbackResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCallback()`

```php
updateCallback($id, $callback_request_body): \OpenAPI\Client\Model\SingleCallback
```

Update Callback

Update an existing **Callback** using a given `:id`. You can change the `URL`, the `object_type` and whether the **Callback** is `enabled` or `disabled`.

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


$apiInstance = new OpenAPI\Client\Api\CallbacksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Callback ID
$callback_request_body = new \OpenAPI\Client\Model\CallbackRequestBody(); // \OpenAPI\Client\Model\CallbackRequestBody

try {
    $result = $apiInstance->updateCallback($id, $callback_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallbacksApi->updateCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Callback ID | [default to &#39;aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee&#39;]
 **callback_request_body** | [**\OpenAPI\Client\Model\CallbackRequestBody**](../Model/CallbackRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleCallback**](../Model/SingleCallback.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
