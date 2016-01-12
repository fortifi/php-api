<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;

class VisitorPostActionRequest
  extends ApiRequest
  implements \JsonSerializable
{

  public function jsonSerialize()
  {
    return [
      "visitorId" => $this->getVisitorId(),
      "eventId" => $this->getEventId(),
      "sid1" => $this->getSid1(),
      "sid2" => $this->getSid2(),
      "sid3" => $this->getSid3(),
      "advertiserFid" => $this->getAdvertiserFid(),
      "campaignFid" => $this->getCampaignFid(),
      "commission" => $this->getCommission(),
      "commissionCurrency" => $this->getCommissionCurrency(),
      "pixels" => $this->getPixels(),
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
  public function getSid1($default = null)
  {
    return Objects::property($this->_getResultJson(), 'sid1', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getSid2($default = null)
  {
    return Objects::property($this->_getResultJson(), 'sid2', $default);
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getSid3($default = null)
  {
    return Objects::property($this->_getResultJson(), 'sid3', $default);
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
  public function getCommission($default = null)
  {
    return Objects::property($this->_getResultJson(), 'commission', $default);
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

  /**
   * @param mixed $default
   *
   * @return AdvertiserPixelRequest[]
   */
  public function getPixels($default = [])
  {
    return Objects::property($this->_getResultJson(), 'pixels', $default);
  }

  protected function _prepareResult($result)
  {
    $return = parent::_prepareResult($result);

    if(!empty($return->pixels))
    {
       $tmp = [];
       foreach($return->pixels as $itm)
       {
         $tmp[] = (new AdvertiserPixelRequest())->hydrate($itm);
       }
       $return->pixels = $tmp;
    }

    return $return;
  }
}
