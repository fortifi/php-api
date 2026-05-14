<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class BasePriceRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "unitNetAmount" => $this->getUnitNetAmount(),
      "unitGrossAmount" => $this->getUnitGrossAmount(),
      "unitTaxAmount" => $this->getUnitTaxAmount(),
      "totalNetAmount" => $this->getTotalNetAmount(),
      "totalGrossAmount" => $this->getTotalGrossAmount(),
      "totalTaxAmount" => $this->getTotalTaxAmount(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getUnitNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getUnitGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getUnitTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitTaxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalTaxAmount', $default);
  }
}
