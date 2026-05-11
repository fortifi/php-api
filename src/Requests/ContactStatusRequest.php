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
      "companyFid" => $this->getCompanyFid(),
      "contactFid" => $this->getContactFid(),
      "groupFid" => $this->getGroupFid(),
      "groupName" => $this->getGroupName(),
      "unsubscribed" => $this->isUnsubscribed(),
      "bounced" => $this->isBounced(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getContactFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'contactFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getGroupName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'groupName', $default);
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

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isBounced($default = false)
  {
    return Objects::property($this->_getResultJson(), 'bounced', $default);
  }
}
