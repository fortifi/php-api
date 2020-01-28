<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CalculateRefundPayload
  implements \JsonSerializable
{
  /**
   * Subscription Refund Type
   * @required
   */
  protected $_subscriptionRefundType;
  /**
   * Timestamp of when to calculate the refund from. Rounded down to the start of the day. Default to start of tomorrow
   */
  protected $_refundFromDate;
  protected $_includeDetails;
  protected $_withTerminationFee;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["subscriptionRefundType"]))
    {
      $this->_subscriptionRefundType = (string)$data["subscriptionRefundType"];
    }
    if(isset($data["refundFromDate"]))
    {
      $this->_refundFromDate = (int)$data["refundFromDate"];
    }
    if(isset($data["includeDetails"]))
    {
      $this->_includeDetails = $data["includeDetails"];
    }
    if(isset($data["withTerminationFee"]))
    {
      $this->_withTerminationFee = $data["withTerminationFee"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "subscriptionRefundType" => $this->_subscriptionRefundType,
      "refundFromDate"         => $this->_refundFromDate,
      "includeDetails"         => $this->_includeDetails,
      "withTerminationFee"     => $this->_withTerminationFee,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSubscriptionRefundType(?string $value)
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
   * @param int $value
   *
   * @return $this
   */
  public function setRefundFromDate(?int $value)
  {
    $this->_refundFromDate = $value;
    return $this;
  }

  /**
   * Timestamp of when to calculate the refund from. Rounded down to the start of the day. Default to start of tomorrow
   *
   * @param mixed $default
   *
   * @return integer
   */
  public function getRefundFromDate($default = null)
  {
    return $this->_refundFromDate ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setIncludeDetails(?bool $value)
  {
    $this->_includeDetails = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isIncludeDetails($default = false)
  {
    return (bool)$this->_includeDetails ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setWithTerminationFee(?bool $value)
  {
    $this->_withTerminationFee = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isWithTerminationFee($default = false)
  {
    return (bool)$this->_withTerminationFee ?: $default;
  }
}
