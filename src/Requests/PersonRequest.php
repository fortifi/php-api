<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PersonRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "prefix" => $this->getPrefix(),
        "firstName" => $this->getFirstName(),
        "middleNames" => $this->getMiddleNames(),
        "lastName" => $this->getLastName(),
        "suffix" => $this->getSuffix(),
        "nickname" => $this->getNickname(),
        "birthday" => $this->getBirthday(),
        "externalReference" => $this->getExternalReference(),
        "jobTitle" => $this->getJobTitle(),
        "ownerFid" => $this->getOwnerFid(),
        "defaultEmailFid" => $this->getDefaultEmailFid(),
        "defaultPhoneFid" => $this->getDefaultPhoneFid(),
        "defaultAddressFid" => $this->getDefaultAddressFid(),
      ]
    );
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPrefix($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'prefix', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFirstName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'firstName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMiddleNames($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'middleNames', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLastName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'lastName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuffix($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'suffix', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getNickname($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'nickname', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBirthday($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'birthday', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getExternalReference($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'externalReference', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getJobTitle($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'jobTitle', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOwnerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'ownerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDefaultEmailFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'defaultEmailFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDefaultPhoneFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'defaultPhoneFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDefaultAddressFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'defaultAddressFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
