<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class MessageGroupRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "status" => $this->getStatus(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'status', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
