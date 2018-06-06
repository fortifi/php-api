<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class SubscriptionCancelPayload
  implements \JsonSerializable
{
  /**
   * Reason FID
   */
  protected $_reasonFid;
  /**
   * Subscription Refund Type
   * @required
   */
  protected $_subscriptionRefundType;
  protected $_cancelAtNextRenewal;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["reasonFid"]))
    {
      $this->_reasonFid = (string)$data["reasonFid"];
    }
    if(isset($data["subscriptionRefundType"]))
    {
      $this->_subscriptionRefundType = (string)$data["subscriptionRefundType"];
    }
    if(isset($data["cancelAtNextRenewal"]))
    {
      $this->_cancelAtNextRenewal = $data["cancelAtNextRenewal"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "reasonFid"              => $this->_reasonFid,
      "subscriptionRefundType" => $this->_subscriptionRefundType,
      "cancelAtNextRenewal"    => $this->_cancelAtNextRenewal,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setReasonFid($value)
  {
    $this->_reasonFid = $value;
    return $this;
  }

  /**
   * Reason FID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getReasonFid($default = null, $trim = true)
  {
    $value = $this->_reasonFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionRefundType($value)
  {
    $this->_subscriptionRefundType = $value;
    return $this;
  }

  /**
   * Subscription Refund Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSubscriptionRefundType($default = null, $trim = true)
  {
    $value = $this->_subscriptionRefundType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param boolean $value
   *
   * @return $this
   */
  public function setCancelAtNextRenewal($value)
  {
    $this->_cancelAtNextRenewal = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isCancelAtNextRenewal($default = false)
  {
    return (bool)$this->_cancelAtNextRenewal ?: $default;
  }
}
