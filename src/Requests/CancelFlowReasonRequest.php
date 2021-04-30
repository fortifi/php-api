<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class CancelFlowReasonRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "appliesToFid" => $this->getAppliesToFid(),
        "key" => $this->getKey(),
        "reason" => $this->getReason(),
      ]
    );
  }

  /**
   * The FID of the product or product group this applies to
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAppliesToFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'appliesToFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * the key to pass through when starting a cancel flow
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getKey($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'key', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * The text displayed to an agent or customer
   * 
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReason($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'reason', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
