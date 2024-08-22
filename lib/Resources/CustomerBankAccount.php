<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a customer_bank_account, providing access to its
 * attributes
 *
 * @property-read mixed $account_holder_name
 * @property-read mixed $account_number_ending
 * @property-read mixed $account_type
 * @property-read mixed $bank_account_token
 * @property-read mixed $bank_name
 * @property-read mixed $country_code
 * @property-read mixed $created_at
 * @property-read mixed $currency
 * @property-read mixed $enabled
 * @property-read mixed $id
 * @property-read mixed $links
 * @property-read mixed $metadata
 */
class CustomerBankAccount extends BaseResource
{
    protected $model_name = "CustomerBankAccount";

    /**
     * Name of the account holder, as known by the bank. This field will be
     * transliterated, upcased and truncated to 18 characters. This field is
     * required unless the request includes a [customer bank account
     * token](#javascript-flow-customer-bank-account-tokens).
     */
    protected $account_holder_name;

    /**
     * The last few digits of the account number. Currently 4 digits for NZD
     * bank accounts and 2 digits for other currencies.
     */
    protected $account_number_ending;

    /**
     * Bank account type. Required for USD-denominated bank accounts. Must not
     * be provided for bank accounts in other currencies. See [local
     * details](#local-bank-details-united-states) for more information.
     */
    protected $account_type;

    /**
     * A token to uniquely refer to a set of bank account details. This feature
     * is still in early access and is only available for certain organisations.
     */
    protected $bank_account_token;

    /**
     * Name of bank, taken from the bank details.
     */
    protected $bank_name;

    /**
     * [ISO 3166-1 alpha-2
     * code](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements).
     * Defaults to the country code of the `iban` if supplied, otherwise is
     * required.
     */
    protected $country_code;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
     * code. Currently "AUD", "CAD", "DKK", "EUR", "GBP", "NZD", "SEK" and "USD"
     * are supported.
     */
    protected $currency;

    /**
     * Boolean value showing whether the bank account is enabled or disabled.
     */
    protected $enabled;

    /**
     * Unique identifier, beginning with "BA".
     */
    protected $id;

    /**
     * 
     */
    protected $links;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

}
