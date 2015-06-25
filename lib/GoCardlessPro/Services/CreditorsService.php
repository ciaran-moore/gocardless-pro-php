<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Services;

/**
  *  Creditors
  *
  * @method \GoCardlessPro\Core\ListResponse
  * list(array $options=array(), array $headers=array()) gets a non-paginated list of models given finder options.
  *
  *  Each [payment](#core-endpoints-payments) taken through the API is linked to
  *  a "creditor", to whom the payment is then paid out. In most cases your
  *  organisation will have a single "creditor", but the API also supports
  *  collecting payments on behalf of others.
  *  
  *  Please get in touch if
  *  you wish to use this endpoint. Currently, for Anti Money Laundering
  *  reasons, any creditors you add must be directly related to your
  *  organisation.
  */
class CreditorsService extends Base
{
  
  /**
    *  Create a creditor
    *
    *  Creates a new creditor.
    *
    *  Example URL: /creditors
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Creditor
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function create($params = array(), $headers = array())
    {
        return $this->make_request('create', 'post', '/creditors', $params, $headers);
    }

  /**
    *  List creditors
    *
    *  Returns a [cursor-paginated](#overview-cursor-pagination) list of your
    *  creditors.
    *
    *  Example URL: /creditors
    *
    *
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return \GoCardlessPro\Core\ListResponse
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function do_list($params = array(), $headers = array())
    {
        return $this->make_request('list', 'get', '/creditors', $params, $headers);
    }

  /**
    *  Get a single creditor
    *
    *  Retrieves the details of an existing creditor.
    *
    *  Example URL: /creditors/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "CR".
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Creditor
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function get($identity, $params = array(), $headers = array())
    {
        $path = self::sub_url('/creditors/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('get', 'get', $path, $params, $headers);
    }

  /**
    *  Update a creditor
    *
    *  Updates a creditor object. Supports all of the fields supported when
    *  creating a creditor.
    *
    *  Example URL: /creditors/:identity
    *
    *
    * @param string $identity Unique identifier, beginning with "CR".
    * @param array $params POST/URL parameters for the argument. Automatically wrapped.
    * @param array $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return Creditor
    * @throws \GoCardlessPro\Core\Error\GoCardlessError GoCardless API or server error, subclasses thereof.
    * @throws \GoCardlessPro\Core\Error\HttpError PHP Curl transport layer-level errors.
    **/
    public function update($identity, $params = array(), $headers = array())
    {
        $path = self::sub_url('/creditors/:identity', array(
            'identity' => $identity
        ));

        return $this->make_request('update', 'put', $path, $params, $headers);
    }



  /**
    *  List creditors
    *
    *  Returns a [cursor-paginated](#overview-cursor-pagination) list of your
    *  creditors.
    *
    * Example URL: /creditors
    *
    * @param int $list_max The maximum number of records to return while paginating.
    * @param string[mixed] $params POST/URL parameters for the argument. Automatically wrapped.
    * @param string[string] $headers String to string associative array of custom headers to add to the requestion.
    *
    * @return \GoCardlessPro\Core\Paginator
    **/
    public function all($list_max, $params = array(), $headers = array())
    {
        return new \GoCardlessPro\Core\Paginator($this, $list_max, $this->do_list($params), $params, $headers);
    }


   /**
    * Get the resource loading class.
    * Used internally to send http requests.
    *
    * @return string
    */
    protected function resourceClass()
    {
        return '\GoCardlessPro\Resources\Creditor';
    }

  /**
    *  Get the key the response object is enclosed in in JSON.
    *  Used internally to wrap and unwrap http requests.
    *
    *  @return string
    */
    protected function envelopeKey()
    {
        return 'creditors';
    }
}
