# # BpayAccountRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_id** | **string** | User ID | [default to '725cc8c0-759b-0138-5d6d-0a58a9feac05']
**account_name** | **string** | Name assigned by the platform/marketplace to identify the account (similar to a nickname) | [default to 'My Water Bill Company']
**biller_code** | **int** | The Biller Code for the biller that will receive the payment. The Biller Code must be a numeric value with 3 to 10 digits. |
**bpay_crn** | **string** | Customer reference number (crn) to be used for this bpay account. The CRN must contain between 2 and 20 digits. | [default to '987654321']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
