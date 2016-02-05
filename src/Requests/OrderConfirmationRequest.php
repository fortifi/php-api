<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class OrderConfirmationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "success" => $this->isSuccess(),
      "message" => $this->getMessage(),
    ];
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
   *
   * @return string
   */
  public function getMessage($default = null)
  {
    return Objects::property($this->_getResultJson(), 'message', $default);
  }
}
