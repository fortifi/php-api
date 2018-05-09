<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class IncidentUpdateRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "status" => $this->getStatus(),
      "message" => $this->getMessage(),
      "id" => $this->getId(),
      "viewPolicy" => $this->getViewPolicy(),
      "editPolicy" => $this->getEditPolicy(),
      "dateCreated" => $this->getDateCreated(),
      "dateModified" => $this->getDateModified(),
      "dateStateChanged" => $this->getDateStateChanged(),
      "displayName" => $this->getDisplayName(),
      "description" => $this->getDescription(),
      "currentState" => $this->getCurrentState(),
      "fid" => $this->getFid(),
    ];
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
  public function getMessage($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'message', $default);
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
}
