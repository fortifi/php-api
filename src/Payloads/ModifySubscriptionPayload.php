<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ModifySubscriptionPayload
  implements \JsonSerializable
{
  /**
   * Price FID to modify subscription with
   * @required
   */
  protected $_priceFid;
  /**
   * Price FID to modify subscription with
   */
  protected $_offerFid;
  /**
   * Mode to modify subscription with
   */
  protected $_mode;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = (string)$data["offerFid"];
    }
    if(isset($data["mode"]))
    {
      $this->_mode = (string)$data["mode"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "priceFid" => $this->_priceFid,
      "offerFid" => $this->_offerFid,
      "mode"     => $this->_mode,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceFid($value)
  {
    $this->_priceFid = $value;
    return $this;
  }

  /**
   * Price FID to modify subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = $this->_priceFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid($value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * Price FID to modify subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = $this->_offerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMode($value)
  {
    $this->_mode = $value;
    return $this;
  }

  /**
   * Mode to modify subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMode($default = null, $trim = true)
  {
    $value = $this->_mode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
