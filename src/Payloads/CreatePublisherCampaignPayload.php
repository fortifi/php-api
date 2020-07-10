<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreatePublisherCampaignPayload
  implements \JsonSerializable
{
  /**
   * FID of a valid Brand
   * @required
   */
  protected $_brandFid;
  /**
   * Visible Display Name
   * @required
   */
  protected $_displayName;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["brandFid"]))
    {
      $this->_brandFid = (string)$data["brandFid"];
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "brandFid"    => $this->_brandFid,
      "displayName" => $this->_displayName,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setBrandFid(?string $value)
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
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * Visible Display Name
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
