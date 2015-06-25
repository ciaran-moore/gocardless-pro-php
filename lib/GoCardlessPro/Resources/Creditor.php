<?php
/**
  * WARNING: Do not edit by hand, this file was generated by Crank:
  *
  * https://github.com/gocardless/crank
  */

namespace GoCardlessPro\Resources;

/**
  * Each [payment](#core-endpoints-payments) taken through the API is linked to
  * a "creditor", to whom the payment is then paid out. In most cases your
  * organisation will have a single "creditor", but the API also supports
  * collecting payments on behalf of others.
  * 
  * Please get in touch if you
  * wish to use this endpoint. Currently, for Anti Money Laundering reasons, any
  * creditors you add must be directly related to your organisation.
  */
class Creditor extends Base
{



  /**
    * The first line of the creditor's address.
    *
    * @return string
    */
    public function address_line1()
    {
        $field = 'address_line1';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The second line of the creditor's address.
    *
    * @return string
    */
    public function address_line2()
    {
        $field = 'address_line2';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The third line of the creditor's address.
    *
    * @return string
    */
    public function address_line3()
    {
        $field = 'address_line3';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The city of the creditor's address.
    *
    * @return string
    */
    public function city()
    {
        $field = 'city';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * [ISO
    * 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements)
    * alpha-2 code, currently only "GB" is supported.
    *
    * @return string
    */
    public function country_code()
    {
        $field = 'country_code';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Fixed [timestamp](#overview-time-zones-dates), recording when this
    * resource was created.
    *
    * @return string
    */
    public function created_at()
    {
        $field = 'created_at';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Unique identifier, beginning with "CR".
    *
    * @return string
    */
    public function id()
    {
        $field = 'id';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * Referenced objects. Key values to stdClasses returned.
    *
    * @return Wrapper\NestedObject
    */
    public function links()
    {
        $field = 'links';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return new Wrapper\NestedObject($field, $this->data->{$field});

    }

  /**
    * The creditor's name.
    *
    * @return string
    */
    public function name()
    {
        $field = 'name';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The creditor's postal code.
    *
    * @return string
    */
    public function postal_code()
    {
        $field = 'postal_code';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }

  /**
    * The creditor's address region, county or department.
    *
    * @return string
    */
    public function region()
    {
        $field = 'region';
        if (!property_exists($this->data, $field)) {
            return null;
        }
        return $this->data->{$field};
    }


  /**
    * Returns a string representation of the project.
    *
    * @return string 
    */
    public function __toString()
    {
        $ret = 'Creditor Class (';
        $ret .= print_r($this->data, true);
        return $ret;
    }
}
