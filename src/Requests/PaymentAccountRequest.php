<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaymentAccountRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "accountType" => $this->getAccountType(),
        "paymentMethod" => $this->getPaymentMethod(),
        "paymentMode" => $this->getPaymentMode(),
        "accountHolder" => $this->getAccountHolder(),
        "isPrimary" => $this->isPrimary(),
      ]
    );
  }

  /**
   * Payment account type
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountType($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'accountType', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Payment Method
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMethod($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMethod', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Payment Mode
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentMode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentMode', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAccountHolder($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'accountHolder', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isPrimary($default = false)
  {
    return Objects::property($this->_getResultJson(), 'isPrimary', $default);
  }
}
