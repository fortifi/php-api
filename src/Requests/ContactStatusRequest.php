<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ContactStatusRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "groupFid" => $this->getGroupFid(),
      "unsubscribed" => $this->isUnsubscribed(),
    ];
  }

  /**
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
   * @param bool $default
   *
   * @return boolean
   */
  public function isUnsubscribed($default = false)
  {
    return Objects::property($this->_getResultJson(), 'unsubscribed', $default);
  }
}
