<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

class VisitorReversalActionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "visitorId" => $this->getVisitorId(),
      "eventId" => $this->getEventId(),
      "advertiserFid" => $this->getAdvertiserFid(),
      "campaignFid" => $this->getCampaignFid(),
      "reversedCommission" => $this->getReversedCommission(),
      "feeCharged" => $this->getFeeCharged(),
      "commissionCurrency" => $this->getCommissionCurrency(),
    ];
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getVisitorId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'visitorId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getEventId($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'eventId', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAdvertiserFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'advertiserFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCampaignFid($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'campaignFid', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getReversedCommission($default = null)
  {
    return Objects::property($this->_getResultJson(), 'reversedCommission', $default);
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getFeeCharged($default = null)
  {
    return Objects::property($this->_getResultJson(), 'feeCharged', $default);
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCommissionCurrency($default = null, $trim = true)
  {
    $value = Objects::property($this->_getResultJson(), 'commissionCurrency', $default);
    return $trim ? Strings::ntrim($value) : $value;
  }
}
