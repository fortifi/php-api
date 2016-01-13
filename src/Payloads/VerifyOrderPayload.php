<?php
namespace Fortifi\Api\V1\Payloads;

class VerifyOrderPayload
  implements \JsonSerializable
{
  /**
   * FID for the payment account you wish to charge the customer through
   */
  protected $_paymentAccountFid;
  /**
   * FID for the payment service you wish to charge the customer through
   */
  protected $_paymentServiceFid;
  protected $_successUrl;
  protected $_cancelUrl;
  protected $_failUrl;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["paymentAccountFid"]))
    {
      $this->_paymentAccountFid = $data["paymentAccountFid"];
    }
    if(isset($data["paymentServiceFid"]))
    {
      $this->_paymentServiceFid = $data["paymentServiceFid"];
    }
    if(isset($data["successUrl"]))
    {
      $this->_successUrl = $data["successUrl"];
    }
    if(isset($data["cancelUrl"]))
    {
      $this->_cancelUrl = $data["cancelUrl"];
    }
    if(isset($data["failUrl"]))
    {
      $this->_failUrl = $data["failUrl"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "paymentAccountFid" => $this->_paymentAccountFid,
      "paymentServiceFid" => $this->_paymentServiceFid,
      "successUrl"        => $this->_successUrl,
      "cancelUrl"         => $this->_cancelUrl,
      "failUrl"           => $this->_failUrl,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentAccountFid($value)
  {
    $this->_paymentAccountFid = $value;
    return $this;
  }

  /**
   * FID for the payment account you wish to charge the customer through
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null)
  {
    return $this->_paymentAccountFid ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentServiceFid($value)
  {
    $this->_paymentServiceFid = $value;
    return $this;
  }

  /**
   * FID for the payment service you wish to charge the customer through
   *
   * @param mixed $default
   *
   * @return string
   */
  public function getPaymentServiceFid($default = null)
  {
    return $this->_paymentServiceFid ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSuccessUrl($value)
  {
    $this->_successUrl = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getSuccessUrl($default = null)
  {
    return $this->_successUrl ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCancelUrl($value)
  {
    $this->_cancelUrl = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getCancelUrl($default = null)
  {
    return $this->_cancelUrl ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setFailUrl($value)
  {
    $this->_failUrl = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return string
   */
  public function getFailUrl($default = null)
  {
    return $this->_failUrl ?: $default;
  }
}
