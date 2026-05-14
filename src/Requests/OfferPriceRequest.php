<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OfferPriceRequest
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
      "unitDiscountNetAmount" => $this->getUnitDiscountNetAmount(),
      "unitDiscountGrossAmount" => $this->getUnitDiscountGrossAmount(),
      "unitDiscountTaxAmount" => $this->getUnitDiscountTaxAmount(),
      "totalNetAmount" => $this->getTotalNetAmount(),
      "totalGrossAmount" => $this->getTotalGrossAmount(),
      "totalTaxAmount" => $this->getTotalTaxAmount(),
      "totalDiscountNetAmount" => $this->getTotalDiscountNetAmount(),
      "totalDiscountGrossAmount" => $this->getTotalDiscountGrossAmount(),
      "totalDiscountTaxAmount" => $this->getTotalDiscountTaxAmount(),
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
  public function getUnitDiscountNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitDiscountNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getUnitDiscountGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitDiscountGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getUnitDiscountTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitDiscountTaxAmount', $default);
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

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalDiscountNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalDiscountNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalDiscountGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalDiscountGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalDiscountTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalDiscountTaxAmount', $default);
  }
}
