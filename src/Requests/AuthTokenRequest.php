<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class AuthTokenRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "token" => $this->getToken(),
      "expiry" => $this->getExpiry(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getToken($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'token', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getExpiry($default = null)
  {
    return Objects::property($this->_getResultJson(), 'expiry', $default);
  }
}
