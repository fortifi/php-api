<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class ProductOfferRequest
  extends EntityRequest
  implements \JsonSerializable
{

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
        "restrictive" => $this->isRestrictive(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCouponCode($default = null)
  {
    return Objects::property($this->_getResultJson(), 'couponCode', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getApplyFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'applyFid', $default);
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
   *
   * @return string
   */
  public function getExpiryTime($default = null)
  {
    return Objects::property($this->_getResultJson(), 'expiryTime', $default);
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
   * Discount Type
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getDiscountType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountType', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSetupDiscountAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscountAmount', $default);
  }

  /**
   * Discount Type
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getSetupDiscountType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscountType', $default);
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
   *
   * @return string
   */
  public function getTermType($default = null)
  {
    return Objects::property($this->_getResultJson(), 'termType', $default);
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
}
