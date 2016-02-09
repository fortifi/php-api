<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class OrderRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "orderHash" => $this->getOrderHash(),
        "state" => $this->getState(),
        "queueFid" => $this->getQueueFid(),
        "offerFid" => $this->getOfferFid(),
        "couponCode" => $this->getCouponCode(),
        "amount" => $this->getAmount(),
        "setupAmount" => $this->getSetupAmount(),
        "taxAmount" => $this->getTaxAmount(),
        "totalAmount" => $this->getTotalAmount(),
        "currency" => $this->getCurrency(),
        "country" => $this->getCountry(),
        "discountAmount" => $this->getDiscountAmount(),
        "discountType" => $this->getDiscountType(),
        "approvedByFid" => $this->getApprovedByFid(),
        "userAgent" => $this->getUserAgent(),
        "userIp" => $this->getUserIp(),
        "paymentAccountFid" => $this->getPaymentAccountFid(),
        "paymentServiceType" => $this->getPaymentServiceType(),
        "lastPaymentFid" => $this->getLastPaymentFid(),
        "companyFid" => $this->getCompanyFid(),
        "customerFid" => $this->getCustomerFid(),
        "fraudFid" => $this->getFraudFid(),
        "invoiceFid" => $this->getInvoiceFid(),
        "amountPaid" => $this->getAmountPaid(),
        "authorizeId" => $this->getAuthorizeId(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrderHash($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orderHash', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getState($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'state', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQueueFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'queueFid', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'offerFid', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCouponCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'couponCode', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSetupAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTotalAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmount', $default);
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
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDiscountAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountAmount', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDiscountType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'discountType', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getApprovedByFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'approvedByFid', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserAgent($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'userAgent', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUserIp($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'userIp', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentAccountFid', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentServiceType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentServiceType', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastPaymentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastPaymentFid', $default);
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFraudFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fraudFid', $default);
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getAmountPaid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountPaid', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAuthorizeId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'authorizeId', $default);
    return $trim ? trim($value) : $value;
  }
}
