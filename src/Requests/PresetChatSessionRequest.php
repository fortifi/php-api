<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class PresetChatSessionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "ticketFid" => $this->getTicketFid(),
      "name" => $this->getName(),
      "email" => $this->getEmail(),
      "companyFid" => $this->getCompanyFid(),
      "customerFid" => $this->getCustomerFid(),
      "departmentFid" => $this->getDepartmentFid(),
      "queueFid" => $this->getQueueFid(),
      "impact" => $this->getImpact(),
      "urgency" => $this->getUrgency(),
      "language" => $this->getLanguage(),
      "topic" => $this->getTopic(),
      "sessionFid" => $this->getSessionFid(),
      "linkUrl" => $this->getLinkUrl(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTicketFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'ticketFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'name', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmail($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'email', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
  public function getCustomerFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'customerFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'departmentFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQueueFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'queueFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getImpact($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'impact', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUrgency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'urgency', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getLanguage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'language', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTopic($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'topic', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSessionFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sessionFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
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
}
