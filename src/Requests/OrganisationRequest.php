<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

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
   *
   * @return string
   */
  public function getOrgName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'orgName', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getOrgFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'orgFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getOrgDomain($default = null)
  {
    return Objects::property($this->_getResultJson(), 'orgDomain', $default);
  }
}
