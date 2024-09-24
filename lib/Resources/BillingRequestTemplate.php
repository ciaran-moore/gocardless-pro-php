<?php
/**
 * WARNING: Do not edit by hand, this file was generated by Crank:
 *
 * https://github.com/gocardless/crank
 */

namespace GoCardlessPro\Resources;

/**
 * A thin wrapper around a billing_request_template, providing access to its
 * attributes
 *
 * @property-read mixed $authorisation_url
 * @property-read mixed $created_at
 * @property-read mixed $id
 * @property-read mixed $mandate_request_currency
 * @property-read mixed $mandate_request_description
 * @property-read mixed $mandate_request_metadata
 * @property-read mixed $mandate_request_scheme
 * @property-read mixed $mandate_request_verify
 * @property-read mixed $metadata
 * @property-read mixed $name
 * @property-read mixed $payment_request_amount
 * @property-read mixed $payment_request_currency
 * @property-read mixed $payment_request_description
 * @property-read mixed $payment_request_metadata
 * @property-read mixed $payment_request_scheme
 * @property-read mixed $redirect_uri
 * @property-read mixed $updated_at
 */
class BillingRequestTemplate extends BaseResource
{
    protected $model_name = "BillingRequestTemplate";

    /**
     * Permanent URL that customers can visit to allow them to complete a flow
     * based on this template, before being returned to the `redirect_uri`.
     */
    protected $authorisation_url;

    /**
     * Fixed [timestamp](#api-usage-time-zones--dates), recording when this
     * resource was created.
     */
    protected $created_at;

    /**
     * Unique identifier, beginning with "BRT".
     */
    protected $id;

    /**
     * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
     * code.
     */
    protected $mandate_request_currency;

    /**
     * A human-readable description of the payment and/or mandate. This will be
     * displayed to the payer when authorising the billing request.
     */
    protected $mandate_request_description;

    /**
     * Key-value store of custom data that will be applied to the mandate
     * created when this request is fulfilled. Up to 3 keys are permitted, with
     * key names up to 50 characters and values up to 500 characters.
     */
    protected $mandate_request_metadata;

    /**
     * A bank payment scheme. Currently "ach", "autogiro", "bacs", "becs",
     * "becs_nz", "betalingsservice", "faster_payments", "pad", "pay_to" and
     * "sepa_core" are supported. Optional for mandate only requests - if left
     * blank, the payer will be able to select the currency/scheme to pay with
     * from a list of your available schemes.
     */
    protected $mandate_request_scheme;

    /**
     * Verification preference for the mandate. One of:
     * <ul>
     *   <li>`minimum`: only verify if absolutely required, such as when part of
     * scheme rules</li>
     *   <li>`recommended`: in addition to `minimum`, use the GoCardless payment
     * intelligence solution to decide if a payer should be verified</li>
     *   <li>`when_available`: if verification mechanisms are available, use
     * them</li>
     *   <li>`always`: as `when_available`, but fail to create the Billing
     * Request if a mechanism isn't available</li>
     * </ul>
     * 
     * By default, all Billing Requests use the `recommended` verification
     * preference. It uses GoCardless payment intelligence solution to determine
     * if a payer is fraudulent or not. The verification mechanism is based on
     * the response and the payer may be asked to verify themselves. If the
     * feature is not available, `recommended` behaves like `minimum`.
     * 
     * If you never wish to take advantage of our reduced risk products and
     * Verified Mandates as they are released in new schemes, please use the
     * `minimum` verification preference.
     * 
     * See [Billing Requests: Creating Verified
     * Mandates](https://developer.gocardless.com/getting-started/billing-requests/verified-mandates/)
     * for more information.
     */
    protected $mandate_request_verify;

    /**
     * Key-value store of custom data. Up to 3 keys are permitted, with key
     * names up to 50 characters and values up to 500 characters.
     */
    protected $metadata;

    /**
     * Name for the template. Provides a friendly human name for the template,
     * as it is shown in the dashboard. Must not exceed 255 characters.
     */
    protected $name;

    /**
     * Amount in full.
     */
    protected $payment_request_amount;

    /**
     * [ISO 4217](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) currency
     * code. `GBP` and `EUR` supported; `GBP` with your customers in the UK and
     * for `EUR` with your customers in supported Eurozone countries only.
     */
    protected $payment_request_currency;

    /**
     * A human-readable description of the payment and/or mandate. This will be
     * displayed to the payer when authorising the billing request.
     */
    protected $payment_request_description;

    /**
     * Key-value store of custom data that will be applied to the payment
     * created when this request is fulfilled. Up to 3 keys are permitted, with
     * key names up to 50 characters and values up to 500 characters.
     */
    protected $payment_request_metadata;

    /**
     * (Optional) A scheme used for Open Banking payments. Currently
     * `faster_payments` is supported in the UK (GBP) and `sepa_credit_transfer`
     * and `sepa_instant_credit_transfer` are supported in supported Eurozone
     * countries (EUR). For Eurozone countries, `sepa_credit_transfer` is used
     * as the default. Please be aware that `sepa_instant_credit_transfer` may
     * incur an additional fee for your customer.
     */
    protected $payment_request_scheme;

    /**
     * URL that the payer can be redirected to after completing the request
     * flow.
     */
    protected $redirect_uri;

    /**
     * Dynamic [timestamp](#api-usage-time-zones--dates) recording when this
     * resource was last updated.
     */
    protected $updated_at;

}
