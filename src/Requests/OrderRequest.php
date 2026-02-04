<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrderRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "id" => $this->getId(),
        "orderHash" => $this->getOrderHash(),
        "externalReference" => $this->getExternalReference(),
        "state" => $this->getState(),
        "queueFid" => $this->getQueueFid(),
        "offerFid" => $this->getOfferFid(),
        "couponCode" => $this->getCouponCode(),
        "amount" => $this->getAmount(),
        "amountUnit" => $this->getAmountUnit(),
        "setupAmount" => $this->getSetupAmount(),
        "setupAmountUnit" => $this->getSetupAmountUnit(),
        "setupDiscountAmount" => $this->getSetupDiscountAmount(),
        "setupDiscountAmountUnit" => $this->getSetupDiscountAmountUnit(),
        "taxAmount" => $this->getTaxAmount(),
        "taxAmountUnit" => $this->getTaxAmountUnit(),
        "totalAmount" => $this->getTotalAmount(),
        "totalAmountUnit" => $this->getTotalAmountUnit(),
        "currency" => $this->getCurrency(),
        "country" => $this->getCountry(),
        "discountAmount" => $this->getDiscountAmount(),
        "discountAmountUnit" => $this->getDiscountAmountUnit(),
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
        "amountPaidUnit" => $this->getAmountPaidUnit(),
        "chargeId" => $this->getChargeId(),
        "authorizeId" => $this->getAuthorizeId(),
        "orderType" => $this->getOrderType(),
        "hasProduct" => $this->isHasProduct(),
        "hasSubscription" => $this->isHasSubscription(),
        "hasAddon" => $this->isHasAddon(),
        "hasModify" => $this->isHasModify(),
        "parentOrderFid" => $this->getParentOrderFid(),
        "paymentMethodName" => $this->getPaymentMethodName(),
        "paymentMethodType" => $this->getPaymentMethodType(),
        "paymentMethodBin" => $this->getPaymentMethodBin(),
        "paymentMethodLast4" => $this->getPaymentMethodLast4(),
        "orderDate" => $this->getOrderDate(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'id', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   * @return integer
   */
  public function getAmountUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountUnit', $default);
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
   * @return integer
   */
  public function getSetupAmountUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupAmountUnit', $default);
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
   * @return integer
   */
  public function getSetupDiscountAmountUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscountAmountUnit', $default);
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
   * @return integer
   */
  public function getTaxAmountUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'taxAmountUnit', $default);
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
   *
   * @return integer
   */
  public function getTotalAmountUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmountUnit', $default);
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
   *
   * @return integer
   */
  public function getDiscountAmountUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountAmountUnit', $default);
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
   *
   * @return integer
   */
  public function getAmountPaidUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountPaidUnit', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getChargeId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'chargeId', $default);
    return $trim ? Strings::ntrim($value) : $value;
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

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrderType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orderType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasProduct($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasProduct', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasSubscription($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasSubscription', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasAddon($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasAddon', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isHasModify($default = false)
  {
    return Objects::property($this->_getResultJson(), 'hasModify', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParentOrderFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'parentOrderFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethodName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMethodName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethodType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMethodType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethodBin($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMethodBin', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethodLast4($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMethodLast4', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrderDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orderDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
