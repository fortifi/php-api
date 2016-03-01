<?php
namespace Fortifi\Api\V1\Requests;

use Fortifi\Api\Core\ApiRequest;
use Packaged\Helpers\Objects;
use Packaged\Helpers\Strings;

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
   * @return integer
   */
  public function getCommission($default = null)
  {
    return Objects::property($this->_getResultJson(), 'commission', $default);
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
        $tmp[] = (new AdvertiserPixelRequest())
          ->hydrate($itm);
      }
      $return->pixels = $tmp;
    }

    return $return;
  }
}
