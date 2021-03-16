# # CompanyRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Company name | [default to 'ABC']
**legal_name** | **string** | Company legal name | [default to 'ABC Pty Ltd']
**tax_number** | **string** | ABN / Tax number | [default to '123456789']
**charge_tax** | **bool** | Charge GST or not? allowed values are true or false | [optional]
**address_line1** | **string** | Address line 1 | [optional]
**address_line2** | **string** | Address line 2 | [optional]
**city** | **string** | City | [optional]
**state** | **string** | State | [optional]
**zip** | **string** | Zip | [optional]
**country** | **string** | 3 digit country code (eg. AUS) | [default to 'AUS']
**phone** | **string** | Company phone number | [optional] [default to '']
**user_id** | **string** | User ID to associate with the company | [default to 'buyer-70729325']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
