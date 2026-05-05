<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class TaxItemRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "productFid" => $this->getProductFid(),
      "priceFid" => $this->getPriceFid(),
      "offerFid" => $this->getOfferFid(),
      "unitAmount" => $this->getUnitAmount(),
      "unitTaxAmount" => $this->getUnitTaxAmount(),
      "setupAmount" => $this->getSetupAmount(),
      "setupTaxAmount" => $this->getSetupTaxAmount(),
      "setupDiscount" => $this->getSetupDiscount(),
      "setupTotalWithoutTax" => $this->getSetupTotalWithoutTax(),
      "setupTotalWithTax" => $this->getSetupTotalWithTax(),
      "totalUnitsAmount" => $this->getTotalUnitsAmount(),
      "totalUnitsTaxAmount" => $this->getTotalUnitsTaxAmount(),
      "totalUnitWithTax" => $this->getTotalUnitWithTax(),
      "totalUnitDiscount" => $this->getTotalUnitDiscount(),
      "totalTaxAmount" => $this->getTotalTaxAmount(),
      "totalAmountWithoutTax" => $this->getTotalAmountWithoutTax(),
      "totalAmountWithTax" => $this->getTotalAmountWithTax(),
      "isInclusive" => $this->isInclusive(),
      "rateBreakdown" => $this->getRateBreakdown(),
    ];
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
   *
   * @return float
   */
  public function getUnitAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'unitAmount', $default);
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
  public function getSetupAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupTaxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupTotalWithoutTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupTotalWithoutTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupTotalWithTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupTotalWithTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalUnitsAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalUnitsAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalUnitsTaxAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalUnitsTaxAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalUnitWithTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalUnitWithTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalUnitDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalUnitDiscount', $default);
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
  public function getTotalAmountWithoutTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmountWithoutTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTotalAmountWithTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'totalAmountWithTax', $default);
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isInclusive($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isInclusive', $default);
  }

  /**
   * @param mixed $default
   *
   * @return TaxRateBreakdownRequest[]
   */
  public function getRateBreakdown($default = [])
  {
    return Objects::property($this->_getResultJson(), 'rateBreakdown', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->rateBreakdown))
    {
      foreach($return->rateBreakdown as $itmKey => $itm)
      {
        $return->rateBreakdown[$itmKey] = (new TaxRateBreakdownRequest())
          ->hydrate($itm);
      }
    }

    return $return;
  }
}
