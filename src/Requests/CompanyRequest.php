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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyName($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'companyName', $default);
    return $trim ? trim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPrimaryDomain($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'primaryDomain', $default);
    return $trim ? trim($value) : $value;
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
    return $trim ? trim($value) : $value;
  }
}
