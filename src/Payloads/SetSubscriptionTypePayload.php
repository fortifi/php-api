<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class SetSubscriptionTypePayload
  implements \JsonSerializable
{
  /**
   * Customer Subscription Status
   */
  protected $_subscriptionType;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["subscriptionType"]))
    {
      $this->_subscriptionType = (string)$data["subscriptionType"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "subscriptionType" => $this->_subscriptionType,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionType(?string $value)
  {
    $this->_subscriptionType = $value;
    return $this;
  }

  /**
   * Customer Subscription Status
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionType($default = null, $trim = true)
  {
    $value = $this->_subscriptionType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
