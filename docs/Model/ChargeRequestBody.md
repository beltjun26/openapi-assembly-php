# # ChargeRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **string** | Bank Account or Card Account ID | [default to '5ef44050-4c56-0137-abdf-0242ac110002']
**name** | **string** | Description of the Charge being created. | [optional]
**amount** | **string** | The cost being charged in cents. | [default to '1000']
**email** | **string** | Email of the user associated with the account being charged. | [default to 'buyer-1556505753@promisepay.com']
**zip** | **int** | Postcode |
**country** | **string** | [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3#Officially_assigned_code_elements) country code of the User being charged. | [default to 'AUS']
**user_id** | **string** | The ID of the User | [optional]
**fee_ids** | **string** | A comma separated list of fee IDs to apply | [optional]
**currency** | **string** | [ISO 4217 alpha-3](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. This is an optional field and if not provided, the item will be created with the default currency of the marketplace. | [optional]
**retain_account** | **bool** | True - Enables the account to be charged in the future. False - Redacts the account after this charge. | [optional]
**device_id** | **string** | Device Information for the device initiating the payment | [optional]
**ip_address** | **string** | IP Information for the device initiating the payment | [optional]
**custom_descriptor** | **string** | When &#x60;custom_descriptors&#x60; are enabled, this is the information to appear on credit card and direct debit statements. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
