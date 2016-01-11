<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

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
   *
   * @return string
   */
  public function getVisitorId($default = null)
  {
    return Objects::property($this->_getResultJson(), 'visitorId', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getEventId($default = null)
  {
    return Objects::property($this->_getResultJson(), 'eventId', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getAdvertiserFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'advertiserFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCampaignFid($default = null)
  {
    return Objects::property($this->_getResultJson(), 'campaignFid', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getReversedCommission($default = null)
  {
    return Objects::property($this->_getResultJson(), 'reversedCommission', $default);
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getFeeCharged($default = null)
  {
    return Objects::property($this->_getResultJson(), 'feeCharged', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCommissionCurrency($default = null)
  {
    return Objects::property($this->_getResultJson(), 'commissionCurrency', $default);
  }
}
      
