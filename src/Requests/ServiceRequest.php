<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ServiceRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "name" => $this->getName(),
      "description" => $this->getDescription(),
      "status" => $this->getStatus(),
      "inheritedStatus" => $this->getInheritedStatus(),
      "visibility" => $this->getVisibility(),
      "parentServiceFid" => $this->getParentServiceFid(),
      "id" => $this->getId(),
      "viewPolicy" => $this->getViewPolicy(),
      "editPolicy" => $this->getEditPolicy(),
      "dateCreated" => $this->getDateCreated(),
      "dateModified" => $this->getDateModified(),
      "dateStateChanged" => $this->getDateStateChanged(),
      "displayName" => $this->getDisplayName(),
      "currentState" => $this->getCurrentState(),
      "fid" => $this->getFid(),
      "brandFid" => $this->getBrandFid(),
    ];
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
  public function getDescription($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'description', $default);
    return $trim ? Strings::ntrim($value) : $value;
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

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInheritedStatus($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'inheritedStatus', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVisibility($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'visibility', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParentServiceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'parentServiceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getId($default = null)
  {
    return Objects::property($this->_getResultJson(), 'id', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getViewPolicy($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'viewPolicy', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEditPolicy($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'editPolicy', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDateCreated($default = null)
  {
    return Objects::property($this->_getResultJson(), 'dateCreated', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDateModified($default = null)
  {
    return Objects::property($this->_getResultJson(), 'dateModified', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDateStateChanged($default = null)
  {
    return Objects::property($this->_getResultJson(), 'dateStateChanged', $default);
  }

  /**
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
   * @param mixed $default
   *
   * @return integer
   */
  public function getCurrentState($default = null)
  {
    return Objects::property($this->_getResultJson(), 'currentState', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'fid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'brandFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
