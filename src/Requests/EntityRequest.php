<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class EntityRequest
  extends FidRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "displayName" => $this->getDisplayName(),
        "description" => $this->getDescription(),
      ]
    );
  }

  /**
   * Display Name
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'displayName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Description
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'description', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
