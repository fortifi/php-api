<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductOfferRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "couponCode" => $this->getCouponCode(),
        "applyFid" => $this->getApplyFid(),
        "maxUsages" => $this->getMaxUsages(),
        "expiryTime" => $this->getExpiryTime(),
        "discountAmount" => $this->getDiscountAmount(),
        "discountType" => $this->getDiscountType(),
        "setupDiscountAmount" => $this->getSetupDiscountAmount(),
        "setupDiscountType" => $this->getSetupDiscountType(),
        "term" => $this->getTerm(),
        "termType" => $this->getTermType(),
        "cycle" => $this->getCycle(),
        "period" => $this->getPeriod(),
        "restrictive" => $this->isRestrictive(),
        "apiOnly" => $this->isApiOnly(),
      ]
    );
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getApplyFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'applyFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getMaxUsages($default = null)
  {
    return Objects::property($this->_getResultJson(), 'maxUsages', $default);
  }

  /**
   * Time in ISO 8601 standard with optional fractions of a second e.g 2015-12-05T13:11:59.888Z
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiryTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'expiryTime', $default);
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
   * Discount Type
   * 
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
   *
   * @return float
   */
  public function getSetupDiscountAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscountAmount', $default);
  }

  /**
   * Discount Type
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSetupDiscountType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'setupDiscountType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTerm($default = null)
  {
    return Objects::property($this->_getResultJson(), 'term', $default);
  }

  /**
   * Term Type
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTermType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'termType', $default);
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
   * Interval in ISO 8601 standard
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPeriod($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'period', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isRestrictive($default = false)
  {
    return Objects::property($this->_getResultJson(), 'restrictive', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isApiOnly($default = false)
  {
    return Objects::property($this->_getResultJson(), 'apiOnly', $default);
  }
}
