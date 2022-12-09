<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InteractionInviteStatusRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "inviteCode" => $this->getInviteCode(),
      "waitTime" => $this->getWaitTime(),
      "earliestStartTime" => $this->getEarliestStartTime(),
      "expiryTime" => $this->getExpiryTime(),
      "accepted" => $this->isAccepted(),
      "provider" => $this->getProvider(),
      "providerReference" => $this->getProviderReference(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInviteCode($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'inviteCode', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getWaitTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'waitTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEarliestStartTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'earliestStartTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExpiryTime($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'expiryTime', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAccepted($default = false)
  {
    return Objects::property($this->_getResultJson(), 'accepted', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProvider($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'provider', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProviderReference($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'providerReference', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
