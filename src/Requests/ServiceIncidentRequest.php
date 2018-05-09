<?php
namespace Fortifi\Api\V1\Requests;

use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class ServiceIncidentRequest
  extends EntityRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return array_merge(
      parent::jsonSerialize(),
      [
        "timeStarted" => $this->getTimeStarted(),
        "timeEnded" => $this->getTimeEnded(),
        "serviceFid" => $this->getServiceFid(),
        "status" => $this->getStatus(),
        "dateCreated" => $this->getDateCreated(),
        "dateModified" => $this->getDateModified(),
        "dateStateChanged" => $this->getDateStateChanged(),
      ]
    );
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTimeStarted($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timeStarted', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getTimeEnded($default = null)
  {
    return Objects::property($this->_getResultJson(), 'timeEnded', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getServiceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'serviceFid', $default);
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
}
