# OpenAPIClient-php

Assembly (formely PromisePay) is a powerful payments engine custom-built for platforms and marketplaces.

For more information, please visit [http://docs.assemblypayments.com/](http://docs.assemblypayments.com/).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oAuth2ClientCredentials
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee; // string | Address ID

try {
    $result = $apiInstance->showAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->showAddress: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://test.api.promisepay.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddressesApi* | [**showAddress**](docs/Api/AddressesApi.md#showaddress) | **GET** /addresses/{id} | Show Address
*AuthenticationApi* | [**token**](docs/Api/AuthenticationApi.md#token) | **POST** /tokens | Token
*BPayAccountsApi* | [**createBPayAccount**](docs/Api/BPayAccountsApi.md#createbpayaccount) | **POST** /bpay_accounts | Create BPay Account
*BPayAccountsApi* | [**redactBPayAccount**](docs/Api/BPayAccountsApi.md#redactbpayaccount) | **DELETE** /bpay_accounts/{id} | Redact BPay Account (Future Feature)
*BPayAccountsApi* | [**showBPayAccount**](docs/Api/BPayAccountsApi.md#showbpayaccount) | **GET** /bpay_accounts/{id} | Show BPay Account
*BPayAccountsApi* | [**showBPayAccountUser**](docs/Api/BPayAccountsApi.md#showbpayaccountuser) | **GET** /bpay_accounts/{id}/users | Show BPay Account User
*BankAccountsApi* | [**createBankAccount**](docs/Api/BankAccountsApi.md#createbankaccount) | **POST** /bank_accounts | Create Bank Account
*BankAccountsApi* | [**redactBankAccount**](docs/Api/BankAccountsApi.md#redactbankaccount) | **DELETE** /bank_accounts/{id} | Redact Bank Account
*BankAccountsApi* | [**sendPennyAmount**](docs/Api/BankAccountsApi.md#sendpennyamount) | **PATCH** /bank_accounts/{id}/penny_send | Send Penny Amount
*BankAccountsApi* | [**showBankAccount**](docs/Api/BankAccountsApi.md#showbankaccount) | **GET** /bank_accounts/{id} | Show Bank Account
*BankAccountsApi* | [**showBankAccountUser**](docs/Api/BankAccountsApi.md#showbankaccountuser) | **GET** /bank_accounts/{id}/users | Show Bank Account User
*BankAccountsApi* | [**validateRoutingNumber**](docs/Api/BankAccountsApi.md#validateroutingnumber) | **GET** /tools/routing_number | Validate Routing Number
*BankAccountsApi* | [**verifyPennyAmount**](docs/Api/BankAccountsApi.md#verifypennyamount) | **PATCH** /bank_accounts/{id}/penny_verify | Verify Penny Amount
*BatchTransactionsApi* | [**listBatchTransactions**](docs/Api/BatchTransactionsApi.md#listbatchtransactions) | **GET** /batch_transactions | List Batch Transactions
*BatchTransactionsApi* | [**showBatchTransaction**](docs/Api/BatchTransactionsApi.md#showbatchtransaction) | **GET** /batch_transactions/{id} | Show Batch Transaction
*CallbacksApi* | [**createCallback**](docs/Api/CallbacksApi.md#createcallback) | **POST** /callbacks | Create Callback
*CallbacksApi* | [**deleteCallback**](docs/Api/CallbacksApi.md#deletecallback) | **DELETE** /callbacks/{id} | Delete Callback
*CallbacksApi* | [**listCallbackResponse**](docs/Api/CallbacksApi.md#listcallbackresponse) | **GET** /callbacks/{id}/responses | List Callback Responses
*CallbacksApi* | [**listCallbacks**](docs/Api/CallbacksApi.md#listcallbacks) | **GET** /callbacks | List Callbacks
*CallbacksApi* | [**showCallback**](docs/Api/CallbacksApi.md#showcallback) | **GET** /callbacks/{id} | Show Callback
*CallbacksApi* | [**showCallbackResponse**](docs/Api/CallbacksApi.md#showcallbackresponse) | **GET** /callbacks/{callback_id}/responses/{id} | Show Callback Response
*CallbacksApi* | [**updateCallback**](docs/Api/CallbacksApi.md#updatecallback) | **PATCH** /callbacks/{id} | Update Callback
*CardAccountsApi* | [**createCardAccount**](docs/Api/CardAccountsApi.md#createcardaccount) | **POST** /card_accounts | Create Card Account
*CardAccountsApi* | [**redactCardAccount**](docs/Api/CardAccountsApi.md#redactcardaccount) | **DELETE** /card_accounts/{id} | Redact Card Account
*CardAccountsApi* | [**showCardAccount**](docs/Api/CardAccountsApi.md#showcardaccount) | **GET** /card_accounts/{id} | Show Card Account
*CardAccountsApi* | [**showCardAccountUser**](docs/Api/CardAccountsApi.md#showcardaccountuser) | **GET** /card_accounts/{id}/users | Show Card Account User
*CardAccountsApi* | [**verifyCard**](docs/Api/CardAccountsApi.md#verifycard) | **PATCH** /card_accounts/{id}/verify | Verify Card
*ChargesApi* | [**createCharge**](docs/Api/ChargesApi.md#createcharge) | **POST** /charges | Create Charge
*ChargesApi* | [**listCharges**](docs/Api/ChargesApi.md#listcharges) | **GET** /charges | List Charges
*ChargesApi* | [**showCharge**](docs/Api/ChargesApi.md#showcharge) | **GET** /charges/{id} | Show Charge
*ChargesApi* | [**showChargeBuyer**](docs/Api/ChargesApi.md#showchargebuyer) | **GET** /charges/{id}/buyers | Show Charge Buyer
*ChargesApi* | [**showChargeStatus**](docs/Api/ChargesApi.md#showchargestatus) | **GET** /charges/{id}/status | Show Charge Status
*CompaniesApi* | [**createCompany**](docs/Api/CompaniesApi.md#createcompany) | **POST** /companies | Create Company
*CompaniesApi* | [**listCompanies**](docs/Api/CompaniesApi.md#listcompanies) | **GET** /companies | List Companies
*CompaniesApi* | [**showCompany**](docs/Api/CompaniesApi.md#showcompany) | **GET** /companies/{id} | Show Company
*CompaniesApi* | [**updateCompany**](docs/Api/CompaniesApi.md#updatecompany) | **PATCH** /companies/{id} | Update Company
*DirectDebitAuthoritiesApi* | [**createDirectDebitAuthority**](docs/Api/DirectDebitAuthoritiesApi.md#createdirectdebitauthority) | **POST** /direct_debit_authorities | Create Direct Debit Authority
*DirectDebitAuthoritiesApi* | [**listDirectDebitAuthorities**](docs/Api/DirectDebitAuthoritiesApi.md#listdirectdebitauthorities) | **GET** /direct_debit_authorities | List Direct Debit Authorities
*DirectDebitAuthoritiesApi* | [**showDirectDebitAuthority**](docs/Api/DirectDebitAuthoritiesApi.md#showdirectdebitauthority) | **GET** /direct_debit_authorities/{id} | Show Direct Debit Authority
*DisbursementsApi* | [**listDisbursement**](docs/Api/DisbursementsApi.md#listdisbursement) | **GET** /disbursements | List Disbursements
*DisbursementsApi* | [**showDisbursement**](docs/Api/DisbursementsApi.md#showdisbursement) | **GET** /disbursements/{id} | Show Disbursement
*DisbursementsApi* | [**showDisbursementBankAccounts**](docs/Api/DisbursementsApi.md#showdisbursementbankaccounts) | **GET** /disbursements/{id}/bank_accounts | Show Disbursement Bank Accounts
*DisbursementsApi* | [**showDisbursementItems**](docs/Api/DisbursementsApi.md#showdisbursementitems) | **GET** /disbursements/{id}/items | Show Disbursement Items
*DisbursementsApi* | [**showDisbursementTransactions**](docs/Api/DisbursementsApi.md#showdisbursementtransactions) | **GET** /disbursements/{id}/transactions | Show Disbursement Transactions
*DisbursementsApi* | [**showDisbursementUsers**](docs/Api/DisbursementsApi.md#showdisbursementusers) | **GET** /disbursements/{id}/users | Show Disbursement Users
*DisbursementsApi* | [**showDisbursementWalletAccounts**](docs/Api/DisbursementsApi.md#showdisbursementwalletaccounts) | **GET** /disbursements/{id}/wallet_accounts | Show Disbursement Wallet Accounts
*FeesApi* | [**createFee**](docs/Api/FeesApi.md#createfee) | **POST** /fees | Create fee
*FeesApi* | [**listFees**](docs/Api/FeesApi.md#listfees) | **GET** /fees | List Fees
*FeesApi* | [**showFee**](docs/Api/FeesApi.md#showfee) | **GET** /fees/{id} | Show Fee
*ItemActionsApi* | [**authorizePayment**](docs/Api/ItemActionsApi.md#authorizepayment) | **PATCH** /items/{id}/authorize_payment | Authorize Payment
*ItemActionsApi* | [**cancelItem**](docs/Api/ItemActionsApi.md#cancelitem) | **PATCH** /items/{id}/cancel | Cancel
*ItemActionsApi* | [**capturePayment**](docs/Api/ItemActionsApi.md#capturepayment) | **PATCH** /items/{id}/capture_payment | Capture Payment
*ItemActionsApi* | [**makePayment**](docs/Api/ItemActionsApi.md#makepayment) | **PATCH** /items/{id}/make_payment | Make Payment
*ItemActionsApi* | [**refund**](docs/Api/ItemActionsApi.md#refund) | **PATCH** /items/{id}/refund | Refund
*ItemActionsApi* | [**voidPayment**](docs/Api/ItemActionsApi.md#voidpayment) | **PATCH** /items/{id}/void_payment | Void Payment
*ItemsApi* | [**createItem**](docs/Api/ItemsApi.md#createitem) | **POST** /items | Create Item
*ItemsApi* | [**deleteItem**](docs/Api/ItemsApi.md#deleteitem) | **DELETE** /items/{id} | Delete Item
*ItemsApi* | [**listItemBatchTransactions**](docs/Api/ItemsApi.md#listitembatchtransactions) | **GET** /items/{id}/batch_transactions | List Item Batch Transactions
*ItemsApi* | [**listItemTransactions**](docs/Api/ItemsApi.md#listitemtransactions) | **GET** /items/{id}/transactions | List Item Transactions
*ItemsApi* | [**listItems**](docs/Api/ItemsApi.md#listitems) | **GET** /items | List Items
*ItemsApi* | [**showItem**](docs/Api/ItemsApi.md#showitem) | **GET** /items/{id} | Show Item
*ItemsApi* | [**showItemBuyer**](docs/Api/ItemsApi.md#showitembuyer) | **GET** /items/{id}/buyers | Show Item Buyer
*ItemsApi* | [**showItemFees**](docs/Api/ItemsApi.md#showitemfees) | **GET** /items/{id}/fees | Show Item Fees
*ItemsApi* | [**showItemSeller**](docs/Api/ItemsApi.md#showitemseller) | **GET** /items/{id}/sellers | Show Item Seller
*ItemsApi* | [**showItemStatus**](docs/Api/ItemsApi.md#showitemstatus) | **GET** /items/{id}/status | Show Item Status
*ItemsApi* | [**showItemWireDetails**](docs/Api/ItemsApi.md#showitemwiredetails) | **GET** /items/{id}/wire_details | Show Item Wire Details
*ItemsApi* | [**updateItem**](docs/Api/ItemsApi.md#updateitem) | **PATCH** /items/{id} | Update Item
*MarketplacesApi* | [**showMarketplace**](docs/Api/MarketplacesApi.md#showmarketplace) | **GET** /marketplace | Show Marketplace
*TokenAuthApi* | [**generateToken**](docs/Api/TokenAuthApi.md#generatetoken) | **POST** /token_auths | Generate Token
*ToolsApi* | [**healthCheck**](docs/Api/ToolsApi.md#healthcheck) | **GET** /tools/status | Health check
*TransactionsApi* | [**listTransactions**](docs/Api/TransactionsApi.md#listtransactions) | **GET** /transactions | List Transactions
*TransactionsApi* | [**showTransaction**](docs/Api/TransactionsApi.md#showtransaction) | **GET** /transactions/{id} | Show Transaction
*TransactionsApi* | [**showTransactionBankAccount**](docs/Api/TransactionsApi.md#showtransactionbankaccount) | **GET** /transactions/{id}/bank_accounts | Show Transaction Bank Account
*TransactionsApi* | [**showTransactionCardAccount**](docs/Api/TransactionsApi.md#showtransactioncardaccount) | **GET** /transactions/{id}/card_accounts | Show Transaction Card Account
*TransactionsApi* | [**showTransactionFees**](docs/Api/TransactionsApi.md#showtransactionfees) | **GET** /transactions/{id}/fees | Show Transaction Fees
*TransactionsApi* | [**showTransactionUser**](docs/Api/TransactionsApi.md#showtransactionuser) | **GET** /transactions/{id}/users | Show Transaction User
*TransactionsApi* | [**showTransactionWalletAccount**](docs/Api/TransactionsApi.md#showtransactionwalletaccount) | **GET** /transactions/{id}/wallet_accounts | Show Transaction Wallet Account
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /users | Create User
*UsersApi* | [**listUserBPayAccounts**](docs/Api/UsersApi.md#listuserbpayaccounts) | **GET** /users/{id}/bpay_accounts | List User&#39;s BPay Accounts
*UsersApi* | [**listUserItems**](docs/Api/UsersApi.md#listuseritems) | **GET** /users/{id}/items | List User Items
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /users | List Users
*UsersApi* | [**setUserDisbursementAccount**](docs/Api/UsersApi.md#setuserdisbursementaccount) | **PATCH** /users/{id}/disbursement_account | Set User Disbursement Account
*UsersApi* | [**showUser**](docs/Api/UsersApi.md#showuser) | **GET** /users/{id} | Show User
*UsersApi* | [**showUserBankAccount**](docs/Api/UsersApi.md#showuserbankaccount) | **GET** /users/{id}/bank_accounts | Show User Bank Account
*UsersApi* | [**showUserCardAccount**](docs/Api/UsersApi.md#showusercardaccount) | **GET** /users/{id}/card_accounts | Show User Card Account
*UsersApi* | [**showUserWalletAccounts**](docs/Api/UsersApi.md#showuserwalletaccounts) | **GET** /users/{id}/wallet_accounts | Show User Wallet Account
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PATCH** /users/{id} | Update User
*UsersApi* | [**verifyUser**](docs/Api/UsersApi.md#verifyuser) | **PATCH** /users/{id}/identity_verified | Verify User (Prelive Only)
*WalletAccountsApi* | [**billPayment**](docs/Api/WalletAccountsApi.md#billpayment) | **POST** /wallet_accounts/{id}/bill_payment | Pay a Bill
*WalletAccountsApi* | [**depositFunds**](docs/Api/WalletAccountsApi.md#depositfunds) | **POST** /wallet_accounts/{id}/deposit | Deposit Funds
*WalletAccountsApi* | [**showWalletAccount**](docs/Api/WalletAccountsApi.md#showwalletaccount) | **GET** /wallet_accounts/{id} | Show Wallet Account
*WalletAccountsApi* | [**showWalletAccountNBPAYDetails**](docs/Api/WalletAccountsApi.md#showwalletaccountnbpaydetails) | **GET** /wallet_accounts/{id}/bpay_details | Show Wallet Account BPAY Details
*WalletAccountsApi* | [**showWalletAccountNPPDetails**](docs/Api/WalletAccountsApi.md#showwalletaccountnppdetails) | **GET** /wallet_accounts/{id}/npp_details | Show Wallet Account NPP Details
*WalletAccountsApi* | [**showWalletAccountUser**](docs/Api/WalletAccountsApi.md#showwalletaccountuser) | **GET** /wallet_accounts/{id}/users | Show Wallet Account User
*WalletAccountsApi* | [**withdrawFunds**](docs/Api/WalletAccountsApi.md#withdrawfunds) | **POST** /wallet_accounts/{id}/withdraw | Withdraw Funds

## Models

- [Account](docs/Model/Account.md)
- [AccountIdRequestBody](docs/Model/AccountIdRequestBody.md)
- [Address](docs/Model/Address.md)
- [AddressAddresses](docs/Model/AddressAddresses.md)
- [AddressAddressesLinks](docs/Model/AddressAddressesLinks.md)
- [BankAccount](docs/Model/BankAccount.md)
- [BankAccountBankAccounts](docs/Model/BankAccountBankAccounts.md)
- [BankAccountBankAccountsBank](docs/Model/BankAccountBankAccountsBank.md)
- [BankAccountBankAccountsLinks](docs/Model/BankAccountBankAccountsLinks.md)
- [BankAccountDeletion](docs/Model/BankAccountDeletion.md)
- [BankAccountIdRequestBody](docs/Model/BankAccountIdRequestBody.md)
- [BankAccountRequestBody](docs/Model/BankAccountRequestBody.md)
- [BatchTransaction](docs/Model/BatchTransaction.md)
- [BatchTransactionAccountExternal](docs/Model/BatchTransactionAccountExternal.md)
- [BatchTransactionAccountExternalCurrency](docs/Model/BatchTransactionAccountExternalCurrency.md)
- [BatchTransactionAddressCountry](docs/Model/BatchTransactionAddressCountry.md)
- [BatchTransactionItem](docs/Model/BatchTransactionItem.md)
- [BatchTransactionLinks](docs/Model/BatchTransactionLinks.md)
- [BatchTransactionMarketplace](docs/Model/BatchTransactionMarketplace.md)
- [BatchTransactionRelated](docs/Model/BatchTransactionRelated.md)
- [BatchTransactionRelatedAccountTo](docs/Model/BatchTransactionRelatedAccountTo.md)
- [BillPaymentRequestBody](docs/Model/BillPaymentRequestBody.md)
- [BpayAccount](docs/Model/BpayAccount.md)
- [BpayAccountDeletion](docs/Model/BpayAccountDeletion.md)
- [BpayAccountRequestBody](docs/Model/BpayAccountRequestBody.md)
- [BpayDetails](docs/Model/BpayDetails.md)
- [BpayDetailsWithId](docs/Model/BpayDetailsWithId.md)
- [Callback](docs/Model/Callback.md)
- [CallbackDeletion](docs/Model/CallbackDeletion.md)
- [CallbackLinks](docs/Model/CallbackLinks.md)
- [CallbackRequestBody](docs/Model/CallbackRequestBody.md)
- [CallbackResponse](docs/Model/CallbackResponse.md)
- [CallbackResponsePayload](docs/Model/CallbackResponsePayload.md)
- [CallbackResponseResponse](docs/Model/CallbackResponseResponse.md)
- [Callbacks](docs/Model/Callbacks.md)
- [CardAccount](docs/Model/CardAccount.md)
- [CardAccountCardAccounts](docs/Model/CardAccountCardAccounts.md)
- [CardAccountCardAccountsCard](docs/Model/CardAccountCardAccountsCard.md)
- [CardAccountCardAccountsLinks](docs/Model/CardAccountCardAccountsLinks.md)
- [CardAccountDeletion](docs/Model/CardAccountDeletion.md)
- [CardAccountIdRequestBody](docs/Model/CardAccountIdRequestBody.md)
- [CardAccountRequestBody](docs/Model/CardAccountRequestBody.md)
- [Charge](docs/Model/Charge.md)
- [ChargeLinks](docs/Model/ChargeLinks.md)
- [ChargeRequestBody](docs/Model/ChargeRequestBody.md)
- [ChargeStatus](docs/Model/ChargeStatus.md)
- [Charges](docs/Model/Charges.md)
- [Company](docs/Model/Company.md)
- [CompanyRelated](docs/Model/CompanyRelated.md)
- [CompanyRequestBody](docs/Model/CompanyRequestBody.md)
- [CompanySelf](docs/Model/CompanySelf.md)
- [DepositRequestBody](docs/Model/DepositRequestBody.md)
- [DirectDebitAuthority](docs/Model/DirectDebitAuthority.md)
- [DirectDebitAuthorityLinks](docs/Model/DirectDebitAuthorityLinks.md)
- [DirectDebitAuthorityRelated](docs/Model/DirectDebitAuthorityRelated.md)
- [DirectDebitAuthorityRequestBody](docs/Model/DirectDebitAuthorityRequestBody.md)
- [Disbursement](docs/Model/Disbursement.md)
- [DisbursementLinks](docs/Model/DisbursementLinks.md)
- [Disbursements](docs/Model/Disbursements.md)
- [Error](docs/Model/Error.md)
- [Fee](docs/Model/Fee.md)
- [FeeRequestBody](docs/Model/FeeRequestBody.md)
- [Fees](docs/Model/Fees.md)
- [Item](docs/Model/Item.md)
- [ItemLinks](docs/Model/ItemLinks.md)
- [ItemRelated](docs/Model/ItemRelated.md)
- [ItemRequestBody](docs/Model/ItemRequestBody.md)
- [Items](docs/Model/Items.md)
- [ListBatchTransactions](docs/Model/ListBatchTransactions.md)
- [ListBpayAccounts](docs/Model/ListBpayAccounts.md)
- [ListBpayAccountsBpayAccounts](docs/Model/ListBpayAccountsBpayAccounts.md)
- [ListBpayAccountsBpayDetails](docs/Model/ListBpayAccountsBpayDetails.md)
- [ListBpayAccountsLinks](docs/Model/ListBpayAccountsLinks.md)
- [ListBpayAccountsMeta](docs/Model/ListBpayAccountsMeta.md)
- [ListCallbackResponses](docs/Model/ListCallbackResponses.md)
- [ListCallbackResponsesLinks](docs/Model/ListCallbackResponsesLinks.md)
- [ListDirectDebitAuthorities](docs/Model/ListDirectDebitAuthorities.md)
- [Marketplace](docs/Model/Marketplace.md)
- [MarketplaceMarketplaces](docs/Model/MarketplaceMarketplaces.md)
- [MarketplaceMarketplacesBusinessInformation](docs/Model/MarketplaceMarketplacesBusinessInformation.md)
- [MarketplaceMarketplacesLinks](docs/Model/MarketplaceMarketplacesLinks.md)
- [MarketplaceMarketplacesRelated](docs/Model/MarketplaceMarketplacesRelated.md)
- [PennyVerifyRequestBody](docs/Model/PennyVerifyRequestBody.md)
- [RefundRequestBody](docs/Model/RefundRequestBody.md)
- [SimpleCompanies](docs/Model/SimpleCompanies.md)
- [SimpleCompany](docs/Model/SimpleCompany.md)
- [SingleBatchTransaction](docs/Model/SingleBatchTransaction.md)
- [SingleBpayDetailsWithId](docs/Model/SingleBpayDetailsWithId.md)
- [SingleCallback](docs/Model/SingleCallback.md)
- [SingleCallbackResponse](docs/Model/SingleCallbackResponse.md)
- [SingleCharge](docs/Model/SingleCharge.md)
- [SingleChargeStatus](docs/Model/SingleChargeStatus.md)
- [SingleCompany](docs/Model/SingleCompany.md)
- [SingleDirectDebitAuthority](docs/Model/SingleDirectDebitAuthority.md)
- [SingleDisbursement](docs/Model/SingleDisbursement.md)
- [SingleFee](docs/Model/SingleFee.md)
- [SingleItem](docs/Model/SingleItem.md)
- [SingleRoutingNumber](docs/Model/SingleRoutingNumber.md)
- [SingleRoutingNumberRoutingNumber](docs/Model/SingleRoutingNumberRoutingNumber.md)
- [SingleStatus](docs/Model/SingleStatus.md)
- [SingleTransaction](docs/Model/SingleTransaction.md)
- [SingleUser](docs/Model/SingleUser.md)
- [SingleWireDetailsWithId](docs/Model/SingleWireDetailsWithId.md)
- [Status](docs/Model/Status.md)
- [TokenAuthRequestBody](docs/Model/TokenAuthRequestBody.md)
- [TokensRequestBody](docs/Model/TokensRequestBody.md)
- [TokensResponse](docs/Model/TokensResponse.md)
- [ToolsStatus](docs/Model/ToolsStatus.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionLinks](docs/Model/TransactionLinks.md)
- [TransactionMarketplace](docs/Model/TransactionMarketplace.md)
- [TransactionPayeeDetails](docs/Model/TransactionPayeeDetails.md)
- [TransactionRelated](docs/Model/TransactionRelated.md)
- [TransactionRelatedTransactions](docs/Model/TransactionRelatedTransactions.md)
- [Transactions](docs/Model/Transactions.md)
- [UpdateItemRequestBody](docs/Model/UpdateItemRequestBody.md)
- [UpdateUserRequestBody](docs/Model/UpdateUserRequestBody.md)
- [User](docs/Model/User.md)
- [UserLinks](docs/Model/UserLinks.md)
- [UserRelated](docs/Model/UserRelated.md)
- [UserRequestBody](docs/Model/UserRequestBody.md)
- [Users](docs/Model/Users.md)
- [WalletAccount](docs/Model/WalletAccount.md)
- [WalletAccountBpayDetails](docs/Model/WalletAccountBpayDetails.md)
- [WalletAccountBpayDetailsBpayDetails](docs/Model/WalletAccountBpayDetailsBpayDetails.md)
- [WalletAccountNppDetails](docs/Model/WalletAccountNppDetails.md)
- [WalletAccountNppDetailsNppDetails](docs/Model/WalletAccountNppDetailsNppDetails.md)
- [WalletAccountNppDetailsNppDetailsMarketplacePayIds](docs/Model/WalletAccountNppDetailsNppDetailsMarketplacePayIds.md)
- [WalletAccountWalletAccounts](docs/Model/WalletAccountWalletAccounts.md)
- [WalletAccountWalletAccountsLinks](docs/Model/WalletAccountWalletAccountsLinks.md)
- [WireDetails](docs/Model/WireDetails.md)
- [WireDetailsWithId](docs/Model/WireDetailsWithId.md)
- [WithdrawRequestBody](docs/Model/WithdrawRequestBody.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication


### oAuth2ClientCredentials

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@assemblypayments.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
