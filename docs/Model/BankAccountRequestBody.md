# # BankAccountRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User ID | [default to 'aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee']
**bank_name** | **string** | Bank name | [default to 'Bank of Australia']
**account_name** | **string** | Account name | [default to 'Samuel Seller']
**routing_number** | **string** | *Required conditionally* - Routing number / SWIFT code / BSB number. See [Bank account formats by country](https://developer.assemblypayments.com/docs/input-formats). | [default to '111123']
**account_number** | **string** | Account number / IBAN. See [Bank account formats by country](https://developer.assemblypayments.com/docs/input-formats). | [default to '111234']
**account_type** | **string** | Bank account type (savings or checking) | [default to ACCOUNT_TYPE_CHECKING]
**holder_type** | **string** | Holder type (personal or business) | [default to HOLDER_TYPE_PERSONAL]
**country** | **string** | [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3#Officially_assigned_code_elements) country code (3 char) | [default to 'AUS']
**payout_currency** | **string** | [ISO 4217 alpha-3](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. This parameter determines the currency with which funds are paid out. | [optional]
**currency** | **string** | [ISO 4217 alpha-3](https://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency code. This is an optional field and if not provided, the item will be created with the default currency of the marketplace. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
