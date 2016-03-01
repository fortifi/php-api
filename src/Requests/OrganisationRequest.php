<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class OrganisationRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "orgName" => $this->getOrgName(),
      "orgFid" => $this->getOrgFid(),
      "orgDomain" => $this->getOrgDomain(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrgName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orgName', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrgFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orgFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOrgDomain($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'orgDomain', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
