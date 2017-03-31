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
   * @required
   */
  protected $_mode;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = $data["priceFid"];
    }
    if(isset($data["mode"]))
    {
      $this->_mode = $data["mode"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "priceFid" => $this->_priceFid,
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
   * @param ModeResponse $value
   *
   * @return $this
   */
  public function setMode(ModeResponse $value)
  {
    $this->_mode = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return ModeResponse
   */
  public function getMode($default = null)
  {
    return $this->_mode ?: $default;
  }
}