<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PresetChatSessionLinkRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "linkUrl" => $this->getLinkUrl(),
      "sessionId" => $this->getSessionId(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLinkUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'linkUrl', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSessionId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sessionId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
