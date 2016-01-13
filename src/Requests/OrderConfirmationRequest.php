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
}
