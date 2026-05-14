<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TotalPriceRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "baseNetAmount" => $this->getBaseNetAmount(),
      "baseGrossAmount" => $this->getBaseGrossAmount(),
      "baseTaxAmount" => $this->getBaseTaxAmount(),
      "offerNetAmount" => $this->getOfferNetAmount(),
      "offerGrossAmount" => $this->getOfferGrossAmount(),
      "offerTaxAmount" => $this->getOfferTaxAmount(),
      "discountNetAmount" => $this->getDiscountNetAmount(),
      "discountGrossAmount" => $this->getDiscountGrossAmount(),
      "discountTaxAmount" => $this->getDiscountTaxAmount(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getBaseNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'baseNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getBaseGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'baseGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getBaseTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'baseTaxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getOfferNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'offerNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getOfferGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'offerGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getOfferTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'offerTaxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscountNetAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountNetAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscountGrossAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountGrossAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscountTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'discountTaxAmount', $default);
  }
}
