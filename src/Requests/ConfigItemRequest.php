<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ConfigItemRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "entityFid" => $this->getEntityFid(),
        "sectionName" => $this->getSectionName(),
        "itemName" => $this->getItemName(),
        "value" => $this->getValue(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEntityFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'entityFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSectionName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sectionName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getItemName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'itemName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getValue($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'value', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
