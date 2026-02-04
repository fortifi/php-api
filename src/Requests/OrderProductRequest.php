<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrderProductRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "price" => $this->getPrice(),
        "priceUnit" => $this->getPriceUnit(),
        "priceFid" => $this->getPriceFid(),
        "offerFid" => $this->getOfferFid(),
        "productFid" => $this->getProductFid(),
        "quantity" => $this->getQuantity(),
        "renewalDate" => $this->getRenewalDate(),
        "purchaseFid" => $this->getPurchaseFid(),
        "skuFid" => $this->getSkuFid(),
        "currency" => $this->getCurrency(),
        "discountAmount" => $this->getDiscountAmount(),
        "discountAmountUnit" => $this->getDiscountAmountUnit(),
        "setupFee" => $this->getSetupFee(),
        "setupFeeUnit" => $this->getSetupFeeUnit(),
        "setupDiscountAmount" => $this->getSetupDiscountAmount(),
        "setupDiscountAmountUnit" => $this->getSetupDiscountAmountUnit(),
        "taxAmount" => $this->getTaxAmount(),
        "taxAmountUnit" => $this->getTaxAmountUnit(),
        "totalAmount" => $this->getTotalAmount(),
        "totalAmountUnit" => $this->getTotalAmountUnit(),
        "cycleType" => $this->getCycleType(),
        "cycleTerm" => $this->getCycleTerm(),
        "cycleExact" => $this->getCycleExact(),
        "cycle" => $this->getCycle(),
        "initialTermStartDate" => $this->getInitialTermStartDate(),
        "initialTermEndDate" => $this->getInitialTermEndDate(),
        "parentFid" => $this->getParentFid(),
        "identity" => $this->getIdentity(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'price', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPriceUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'priceUnit', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'priceFid', $default);
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
  public function getProductFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'productFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantity($default = null)
  {
    return Objects::property($this->_getResultJson(), 'quantity', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRenewalDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'renewalDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPurchaseFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'purchaseFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSkuFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'skuFid', $default);
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
   *
   * @return float
   */
  public function getSetupFee($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupFee', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSetupFeeUnit($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupFeeUnit', $default);
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
   * Term Type
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycleType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycleType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCycleTerm($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cycleTerm', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycleExact($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycleExact', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Interval in ISO 8601 standard
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCycle($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'cycle', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Custom initial term start date (Time in ISO 8601 standard e.g 2015-12-05T13:11:59Z)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitialTermStartDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'initialTermStartDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Custom initial term end date (Time in ISO 8601 standard e.g 2015-12-05T13:11:59Z)
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInitialTermEndDate($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'initialTermEndDate', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'parentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIdentity($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'identity', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
