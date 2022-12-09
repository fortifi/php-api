<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class InteractionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "provider" => $this->getProvider(),
      "providerReference" => $this->getProviderReference(),
      "interactionFid" => $this->getInteractionFid(),
    ];
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

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInteractionFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'interactionFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
