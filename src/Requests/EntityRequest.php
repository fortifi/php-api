<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;

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
    return $trim ? trim($value) : $value;
  }

  /**
   * Discription
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'description', $default);
    return $trim ? trim($value) : $value;
  }
}
