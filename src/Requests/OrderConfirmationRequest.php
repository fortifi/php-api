<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrderConfirmationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "paymentAccountFid" => $this->getPaymentAccountFid(),
      "paymentMode" => $this->getPaymentMode(),
      "success" => $this->isSuccess(),
      "message" => $this->getMessage(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'paymentAccountFid', $default);
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
   * @param bool $default
   *
   * @return boolean
   */
  public function isSuccess($default = false)
  {
    return Objects::property($this->_getResultJson(), 'success', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'message', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
