<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ReasonRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "groupFid" => $this->getGroupFid(),
        "usedCount" => $this->getUsedCount(),
      ]
    );
  }

  /**
   * FID for the reason group
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getGroupFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'groupFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getUsedCount($default = null)
  {
    return Objects::property($this->_getResultJson(), 'usedCount', $default);
  }
}
