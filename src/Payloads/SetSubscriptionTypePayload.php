<?php
namespace Fortifi\Api\V1\Payloads;

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
      $this->_subscriptionType = $data["subscriptionType"];
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
  public function setSubscriptionType($value)
  {
    $this->_subscriptionType = $value;
    return $this;
  }

  /**
   * Customer Subscription Status
   * 
   * @param mixed $default
   *
   * @return string
   */
  public function getSubscriptionType($default = null)
  {
    return $this->_subscriptionType ?: $default;
  }
}
      
