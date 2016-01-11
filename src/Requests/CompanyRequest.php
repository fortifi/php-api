<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class CompanyRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "companyName" => $this->getCompanyName(),
      "primaryDomain" => $this->getPrimaryDomain(),
      "companyFid" => $this->getCompanyFid(),
    ];
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCompanyName($default = null)
  {
    return Objects::property($this->_getResultJson(), 'companyName', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getPrimaryDomain($default = null)
  {
    return Objects::property($this->_getResultJson(), 'primaryDomain', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCompanyFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'companyFid', $default);
  }
}
      
