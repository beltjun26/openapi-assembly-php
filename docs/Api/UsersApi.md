# OpenAPI\Client\UsersApi

All URIs are relative to https://test.api.promisepay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser()**](UsersApi.md#createUser) | **POST** /users | Create User
[**listUserBPayAccounts()**](UsersApi.md#listUserBPayAccounts) | **GET** /users/{id}/bpay_accounts | List User&#39;s BPay Accounts
[**listUserItems()**](UsersApi.md#listUserItems) | **GET** /users/{id}/items | List User Items
[**listUsers()**](UsersApi.md#listUsers) | **GET** /users | List Users
[**setUserDisbursementAccount()**](UsersApi.md#setUserDisbursementAccount) | **PATCH** /users/{id}/disbursement_account | Set User Disbursement Account
[**showUser()**](UsersApi.md#showUser) | **GET** /users/{id} | Show User
[**showUserBankAccount()**](UsersApi.md#showUserBankAccount) | **GET** /users/{id}/bank_accounts | Show User Bank Account
[**showUserCardAccount()**](UsersApi.md#showUserCardAccount) | **GET** /users/{id}/card_accounts | Show User Card Account
[**showUserWalletAccounts()**](UsersApi.md#showUserWalletAccounts) | **GET** /users/{id}/wallet_accounts | Show User Wallet Account
[**updateUser()**](UsersApi.md#updateUser) | **PATCH** /users/{id} | Update User
[**verifyUser()**](UsersApi.md#verifyUser) | **PATCH** /users/{id}/identity_verified | Verify User (Prelive Only)


## `createUser()`

```php
createUser($user_request_body): \OpenAPI\Client\Model\SingleUser
```

Create User

Create a **User**. **Users** can be associated with **Items** either as a buyer or a seller. **Users** can’t be both the buyer and seller for the same **Item**. **Note**: Some parameters are required for user verification. See our guide on [Onboarding a Payout User/Seller](https://developer.assemblypayments.com/docs/onboarding-a-pay-out-user) for more information.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_request_body = new \OpenAPI\Client\Model\UserRequestBody(); // \OpenAPI\Client\Model\UserRequestBody

try {
    $result = $apiInstance->createUser($user_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_request_body** | [**\OpenAPI\Client\Model\UserRequestBody**](../Model/UserRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleUser**](../Model/SingleUser.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserBPayAccounts()`

```php
listUserBPayAccounts($id): \OpenAPI\Client\Model\ListBpayAccounts
```

List User's BPay Accounts

List the **BPay Accounts** the **User** is associated with using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 901d8cd0-6af3-0138-967d-0a58a9feac04; // string | User ID

try {
    $result = $apiInstance->listUserBPayAccounts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUserBPayAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;901d8cd0-6af3-0138-967d-0a58a9feac04&#39;]

### Return type

[**\OpenAPI\Client\Model\ListBpayAccounts**](../Model/ListBpayAccounts.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUserItems()`

```php
listUserItems($id, $offset, $limit): \OpenAPI\Client\Model\Items
```

List User Items

Retrieve an ordered and paginated list of existing **Items** the **User** is associated with using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test-user-1592459047-22; // string | User ID
$offset = 0; // int | Number of records to offset. Required for pagination.
$limit = 10; // int | Number of records to retrieve. Up to 200.

try {
    $result = $apiInstance->listUserItems($id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUserItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;test-user-1592459047-22&#39;]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]

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

## `listUsers()`

```php
listUsers($search, $limit, $offset): \OpenAPI\Client\Model\Users
```

List Users

Retrieve an ordered and paginated list of existing **Users**.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = ; // string | A text value to be used for searching users
$limit = 10; // int | Number of records to retrieve. Up to 200.
$offset = 0; // int | Number of records to offset. Required for pagination.

try {
    $result = $apiInstance->listUsers($search, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| A text value to be used for searching users |
 **limit** | **int**| Number of records to retrieve. Up to 200. | [optional] [default to 10]
 **offset** | **int**| Number of records to offset. Required for pagination. | [optional] [default to 0]

### Return type

[**\OpenAPI\Client\Model\Users**](../Model/Users.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setUserDisbursementAccount()`

```php
setUserDisbursementAccount($id, $bank_account_id_request_body): \OpenAPI\Client\Model\SingleUser
```

Set User Disbursement Account

Set the **User’s Disbursement Account** using a given **User** `:id` and a **Bank Account** `:account_id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = Seller_1234; // string | User ID
$bank_account_id_request_body = new \OpenAPI\Client\Model\BankAccountIdRequestBody(); // \OpenAPI\Client\Model\BankAccountIdRequestBody

try {
    $result = $apiInstance->setUserDisbursementAccount($id, $bank_account_id_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->setUserDisbursementAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;Seller_1234&#39;]
 **bank_account_id_request_body** | [**\OpenAPI\Client\Model\BankAccountIdRequestBody**](../Model/BankAccountIdRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleUser**](../Model/SingleUser.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showUser()`

```php
showUser($id): \OpenAPI\Client\Model\SingleUser
```

Show User

Show details of a specific User using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = buyer-1556506027; // string | User ID

try {
    $result = $apiInstance->showUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->showUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;buyer-1556506027&#39;]

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

## `showUserBankAccount()`

```php
showUserBankAccount($id): \OpenAPI\Client\Model\BankAccount
```

Show User Bank Account

Shows the user’s active bank account using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 46deb476-c1a6-41eb-8eb7-26a695bbe5bc; // string | User ID

try {
    $result = $apiInstance->showUserBankAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->showUserBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;46deb476-c1a6-41eb-8eb7-26a695bbe5bc&#39;]

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

## `showUserCardAccount()`

```php
showUserCardAccount($id): \OpenAPI\Client\Model\CardAccount
```

Show User Card Account

Show the user’s active card account using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = buyer-71439598; // string | User ID

try {
    $result = $apiInstance->showUserCardAccount($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->showUserCardAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;buyer-71439598&#39;]

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

## `showUserWalletAccounts()`

```php
showUserWalletAccounts($id): \OpenAPI\Client\Model\WalletAccount
```

Show User Wallet Account

Show the **User’s Wallet Account** using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aed45af0-6f63-0138-901c-0a58a9feac03; // string | User ID

try {
    $result = $apiInstance->showUserWalletAccounts($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->showUserWalletAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;aed45af0-6f63-0138-901c-0a58a9feac03&#39;]

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

## `updateUser()`

```php
updateUser($id, $update_user_request_body): \OpenAPI\Client\Model\SingleUser
```

Update User

Update an existing **User’s** attributes using a given `:id`.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = buyer-1556506027; // string | Unique ID that can be generated by the platform. Cannot contain ’.’ character.
$update_user_request_body = new \OpenAPI\Client\Model\UpdateUserRequestBody(); // \OpenAPI\Client\Model\UpdateUserRequestBody

try {
    $result = $apiInstance->updateUser($id, $update_user_request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Unique ID that can be generated by the platform. Cannot contain ’.’ character. | [default to &#39;buyer-1556506027&#39;]
 **update_user_request_body** | [**\OpenAPI\Client\Model\UpdateUserRequestBody**](../Model/UpdateUserRequestBody.md)|  |

### Return type

[**\OpenAPI\Client\Model\SingleUser**](../Model/SingleUser.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oAuth2ClientCredentials](../../README.md#oAuth2ClientCredentials)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyUser()`

```php
verifyUser($id): \OpenAPI\Client\Model\SingleUser
```

Verify User (Prelive Only)

Sets a user’s verification state to `approved` on pre-live given the **User** `:id`. Ensure that a **User** has the required user verification information before using this call, otherwise the call will fail. **Note**: This API call will only work in our pre-live environment. The user verification workflow holds for all users in production.

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


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = buyer-1556506027; // string | User ID

try {
    $result = $apiInstance->verifyUser($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->verifyUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| User ID | [default to &#39;buyer-1556506027&#39;]

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
