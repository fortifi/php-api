<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class SubscriptionCancellationRequest
  extends SubscriptionRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "amountWithTax" => $this->getAmountWithTax(),
        "amountWithoutTax" => $this->getAmountWithoutTax(),
        "tax" => $this->getTax(),
        "terminationFee" => $this->getTerminationFee(),
        "terminationFeeWithTax" => $this->getTerminationFeeWithTax(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmountWithTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountWithTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getAmountWithoutTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'amountWithoutTax', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'tax', $default);
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
   *
   * @return float
   */
  public function getTerminationFeeWithTax($default = null)
  {
    return Objects::property($this->_getResultJson(), 'terminationFeeWithTax', $default);
  }
}
