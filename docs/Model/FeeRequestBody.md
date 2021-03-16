# # FeeRequestBody

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name | [default to 'Seller Success Fee']
**fee_type_id** | **string** | Fee type:   1. Fixed   2. Percentage   3. Percentage with Cap   4. Percentage with Min | [default to FEE_TYPE_ID__2]
**amount** | **string** | Amount in cents; if the fee type is percentage, then this shows the percentage in hundredths (For example, an amount of 5 refers to 0.05% in fees.) | [default to '200']
**cap** | **string** | Cap the Fee | [optional]
**min** | **string** | Minimum Fee | [optional]
**max** | **string** | Maximum Fee | [optional]
**to** | **string** | Who pays the Fee. Allowed values are (buyer or seller). If this field has a value of buyer, then the buyer will have to pay the fee on top of the actual payment (example for an item of 100 and a fee of 2, then the buyer would have to pay 102) If this field has a value of seller, then the seller will end up receiving the amount - the fee (example for an item of 100 and a fee of 2, then the seller would end up receiving 98) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
