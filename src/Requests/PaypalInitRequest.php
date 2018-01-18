<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PaypalInitRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "redirectUrl" => $this->getRedirectUrl(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRedirectUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'redirectUrl', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
