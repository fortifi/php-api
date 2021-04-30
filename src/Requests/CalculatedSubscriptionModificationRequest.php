<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CalculatedSubscriptionModificationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "nextRenewalAmount" => $this->getNextRenewalAmount(),
      "nextRenewalDiscount" => $this->getNextRenewalDiscount(),
      "nextRenewalTax" => $this->getNextRenewalTax(),
      "nextRenewalTotal" => $this->getNextRenewalTotal(),
      "nextRenewalDate" => $this->getNextRenewalDate(),
      "setupAmount" => $this->getSetupAmount(),
      "setupDiscount" => $this->getSetupDiscount(),
      "chargeAmount" => $this->getChargeAmount(),
      "chargeTax" => $this->getChargeTax(),
      "chargeTotal" => $this->getChargeTotal(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getNextRenewalAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nextRenewalAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getNextRenewalDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nextRenewalDiscount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getNextRenewalTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nextRenewalTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getNextRenewalTotal($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nextRenewalTotal', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getNextRenewalDate($default = null)
  {
    return Objects::property($this->_getResultJson(), 'nextRenewalDate', $default);
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
  public function getSetupDiscount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'setupDiscount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getChargeAmount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'chargeAmount', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getChargeTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'chargeTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getChargeTotal($default = null)
  {
    return Objects::property($this->_getResultJson(), 'chargeTotal', $default);
  }
}
