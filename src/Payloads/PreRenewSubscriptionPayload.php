<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class PreRenewSubscriptionPayload
  implements \JsonSerializable
{
  /**
   * Price FID to modify subscription with
   */
  protected $_priceFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = $data["priceFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "priceFid" => $this->_priceFid,
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
}
