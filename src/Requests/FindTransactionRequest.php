<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class FindTransactionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "customerFid" => $this->getCustomerFid(),
      "fullName" => $this->getFullName(),
      "email" => $this->getEmail(),
      "city" => $this->getCity(),
      "country" => $this->getCountry(),
      "items" => $this->getItems(),
      "subscriptions" => $this->getSubscriptions(),
      "paymentScheme" => $this->getPaymentScheme(),
      "paymentLast4" => $this->getPaymentLast4(),
      "paymentExp" => $this->getPaymentExp(),
      "currency" => $this->getCurrency(),
      "totalAmount" => $this->getTotalAmount(),
      "date" => $this->getDate(),
      "taxes" => $this->getTaxes(),
      "discounts" => $this->getDiscounts(),
      "invoiceFid" => $this->getInvoiceFid(),
      "transactionFid" => $this->getTransactionFid(),
      "subscriptionFid" => $this->getSubscriptionFid(),
      "companyFid" => $this->getCompanyFid(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFullName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fullName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'email', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCity($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'city', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCountry($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'country', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceItemRequest[]
   */
  public function getItems($default = [])
  {
    return Objects::property($this->_getResultJson(), 'items', $default);
  }

  /**
   * @param mixed $default
   *
   * @return SubscriptionRequest[]
   */
  public function getSubscriptions($default = [])
  {
    return Objects::property($this->_getResultJson(), 'subscriptions', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentScheme($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentScheme', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentLast4($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentLast4', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentExp($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentExp', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCurrency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'currency', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTotalAmount($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'totalAmount', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'date', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceTaxItemRequest[]
   */
  public function getTaxes($default = [])
  {
    return Objects::property($this->_getResultJson(), 'taxes', $default);
  }

  /**
   * @param mixed $default
   *
   * @return InvoiceDiscountItemRequest[]
   */
  public function getDiscounts($default = [])
  {
    return Objects::property($this->_getResultJson(), 'discounts', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInvoiceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'invoiceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTransactionFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'transactionFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'subscriptionFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->items))
    {
      foreach($return->items as $itmKey => $itm)
      {
        $return->items[$itmKey] = (new InvoiceItemRequest())
          ->hydrate($itm);
      }
    }

    if(!empty($return->subscriptions))
    {
      foreach($return->subscriptions as $itmKey => $itm)
      {
        $return->subscriptions[$itmKey] = (new SubscriptionRequest())
          ->hydrate($itm);
      }
    }

    if(!empty($return->taxes))
    {
      foreach($return->taxes as $itmKey => $itm)
      {
        $return->taxes[$itmKey] = (new InvoiceTaxItemRequest())
          ->hydrate($itm);
      }
    }

    if(!empty($return->discounts))
    {
      foreach($return->discounts as $itmKey => $itm)
      {
        $return->discounts[$itmKey] = (new InvoiceDiscountItemRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
