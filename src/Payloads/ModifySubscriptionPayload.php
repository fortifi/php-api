<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ModifySubscriptionPayload
  implements \JsonSerializable
{
  /**
   * Subscription FID to match a subscription with
   * @required
   */
  protected $_subscriptionFid;
  /**
   * Price FID to modify subscription with
   * @required
   */
  protected $_priceFid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["subscriptionFid"]))
    {
      $this->_subscriptionFid = $data["subscriptionFid"];
    }
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = $data["priceFid"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "subscriptionFid" => $this->_subscriptionFid,
      "priceFid"        => $this->_priceFid,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionFid($value)
  {
    $this->_subscriptionFid = $value;
    return $this;
  }

  /**
   * Subscription FID to match a subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionFid($default = null, $trim = true)
  {
    $value = $this->_subscriptionFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
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
