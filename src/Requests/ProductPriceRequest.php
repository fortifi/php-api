<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ProductPriceRequest
  extends EntityRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "productFid" => $this->getProductFid(),
        "currency" => $this->getCurrency(),
        "price" => $this->getPrice(),
        "setupFee" => $this->getSetupFee(),
        "cycleType" => $this->getCycleType(),
        "cycleTerm" => $this->getCycleTerm(),
        "cycleExact" => $this->getCycleExact(),
        "cycle" => $this->getCycle(),
        "priceBandFid" => $this->getPriceBandFid(),
        "skuFid" => $this->getSkuFid(),
        "taxInclusive" => $this->isTaxInclusive(),
        "suspendAfterDays" => $this->getSuspendAfterDays(),
        "cancelDays" => $this->getCancelDays(),
        "terminationFee" => $this->getTerminationFee(),
        "terminationType" => $this->getTerminationType(),
        "suspendStyle" => $this->getSuspendStyle(),
        "visibility" => $this->getVisibility(),
      ]
    );
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
  public function getPrice($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'price', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSetupFee($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'setupFee', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceBandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'priceBandFid', $default);
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
   * @param bool $default
   *
   * @return boolean
   */
  public function isTaxInclusive($default = false)
  {
    return Objects::property($this->_getResultJson(), 'taxInclusive', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSuspendAfterDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'suspendAfterDays', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCancelDays($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cancelDays', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTerminationFee($default = null)
  {
    return Objects::property($this->_getResultJson(), 'terminationFee', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTerminationType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'terminationType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuspendStyle($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'suspendStyle', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getVisibility($default = null)
  {
    return Objects::property($this->_getResultJson(), 'visibility', $default);
  }
}
