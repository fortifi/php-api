<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class IntegrationUserRequest
  extends ApiRequest
  implements \JsonSerializable
{

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName" => $this->getDisplayName(),
      "userFid" => $this->getUserFid(),
      "employeeFid" => $this->getEmployeeFid(),
      "roles" => $this->getRoles(),
    ];
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
  public function getUserFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'userFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEmployeeFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'employeeFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * Role Aliases
   * 
   * @param mixed $default
   *
   * @return string[]
   */
  public function getRoles($default = [])
  {
    return Objects::property($this->_getResultJson(), 'roles', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);


    return $return;
  }
}
