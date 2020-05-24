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

  const SUBSCRIPTION_TYPE_NONE = 'none';
  const SUBSCRIPTION_TYPE_TRIAL = 'trial';
  const SUBSCRIPTION_TYPE_FREE = 'free';
  const SUBSCRIPTION_TYPE_PAID = 'paid';

  /**
   * @param string $value none, trial, free, paid
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
