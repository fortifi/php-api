<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

class ProductPriceRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "productFid" => $this->getProductFid(),
        "currency" => $this->getCurrency(),
        "price" => $this->getPrice(),
        "setupFee" => $this->getSetupFee(),
        "cycle" => $this->getCycle(),
        "cycleTerm" => $this->getCycleTerm(),
        "cycleExact" => $this->getCycleExact(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getProductFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'productFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCurrency($default = null)
  {
    return Objects::property($this->_getResultJson(), 'currency', $default);
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
   *
   * @return integer
   */
  public function getSetupFee($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupFee', $default);
  }

  /**
   * Term Type
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getCycle($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cycle', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCycleTerm($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cycleTerm', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCycleExact($default = null)
  {
    return Objects::property($this->_getResultJson(), 'cycleExact', $default);
  }
}
