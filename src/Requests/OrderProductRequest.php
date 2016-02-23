<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class OrderProductRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "price" => $this->getPrice(),
        "offerFid" => $this->getOfferFid(),
        "firstChargeAmount" => $this->getFirstChargeAmount(),
        "firstChargeDiscount" => $this->getFirstChargeDiscount(),
        "firstChargeTax" => $this->getFirstChargeTax(),
        "renewalDate" => $this->getRenewalDate(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getPrice($default = null)
  {
    return Objects::property($this->_getResultJson(), 'price', $default);
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
   *
   * @return integer
   */
  public function getFirstChargeAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'firstChargeAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getFirstChargeDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'firstChargeDiscount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getFirstChargeTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'firstChargeTax', $default);
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
    return $trim ? trim($value) : $value;
  }
}
