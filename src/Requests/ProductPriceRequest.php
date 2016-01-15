<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class ProductPriceRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "fid" => $this->getFid(),
      "productFid" => $this->getProductFid(),
      "currency" => $this->getCurrency(),
      "price" => $this->getPrice(),
      "setupFee" => $this->getSetupFee(),
      "cycle" => $this->getCycle(),
      "cycleTerm" => $this->getCycleTerm(),
      "cycleExact" => $this->getCycleExact(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'fid', $default);
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
