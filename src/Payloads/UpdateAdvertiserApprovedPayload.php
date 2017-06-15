<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateAdvertiserApprovedPayload
  implements \JsonSerializable
{
  /**
   * FID of an Advertiser
   * @required
   */
  protected $_advertiserFid;
  protected $_approved = true;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["advertiserFid"]))
    {
      $this->_advertiserFid = $data["advertiserFid"];
    }
    if(isset($data["approved"]))
    {
      $this->_approved = $data["approved"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "advertiserFid" => $this->_advertiserFid,
      "approved"      => $this->_approved,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setAdvertiserFid($value)
  {
    $this->_advertiserFid = $value;
    return $this;
  }

  /**
   * FID of an Advertiser
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getAdvertiserFid($default = null, $trim = true)
  {
    $value = $this->_advertiserFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param boolean $value
   *
   * @return $this
   */
  public function setApproved($value)
  {
    $this->_approved = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isApproved($default = false)
  {
    return (bool)$this->_approved ?: $default;
  }
}
