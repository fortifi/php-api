<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class VisitorRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "deviceFid" => $this->getDeviceFid(),
      "referrerUrl" => $this->getReferrerUrl(),
      "affiliateFid" => $this->getAffiliateFid(),
      "campaignHash" => $this->getCampaignHash(),
      "sid1" => $this->getSid1(),
      "sid2" => $this->getSid2(),
      "sid3" => $this->getSid3(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDeviceFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'deviceFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReferrerUrl($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'referrerUrl', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAffiliateFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'affiliateFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignHash($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'campaignHash', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid1($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sid1', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid2($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sid2', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSid3($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'sid3', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
