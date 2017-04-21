<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateAdvertiserCampaignPayload
  implements \JsonSerializable
{
  /**
   * FID of an Advertiser
   * @required
   */
  protected $_advertiserFid;
  /**
   * FID of a valid Brand
   * @required
   */
  protected $_brandFid;
  /**
   * Visiable Display Name
   * @required
   */
  protected $_displayName;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["advertiserFid"]))
    {
      $this->_advertiserFid = $data["advertiserFid"];
    }
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = $data["brandFid"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = $data["displayName"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "advertiserFid" => $this->_advertiserFid,
      "brandFid"      => $this->_brandFid,
      "displayName"   => $this->_displayName,
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
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid($value)
  {
    $this->_brandFid = $value;
    return $this;
  }

  /**
   * FID of a valid Brand
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getBrandFid($default = null, $trim = true)
  {
    $value = $this->_brandFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName($value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * Visiable Display Name
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = $this->_displayName ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
