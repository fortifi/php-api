<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrderRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "orderHash" => $this->getOrderHash(),
        "externalReference" => $this->getExternalReference(),
        "state" => $this->getState(),
        "queueFid" => $this->getQueueFid(),
        "offerFid" => $this->getOfferFid(),
        "couponCode" => $this->getCouponCode(),
        "amount" => $this->getAmount(),
        "setupAmount" => $this->getSetupAmount(),
        "setupDiscountAmount" => $this->getSetupDiscountAmount(),
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
        "brandFid" => $this->getBrandFid(),
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
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalReference($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'externalReference', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getState($default = null)
  {
    return Objects::property($this->_getResultJson(), 'state', $default);
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupDiscountAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscountAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
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
   * @return float
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
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
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'brandFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
  public function getFraudFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fraudFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   *
   * @return float
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
    return $trim ? Strings::ntrim($value) : $value;
  }
}
