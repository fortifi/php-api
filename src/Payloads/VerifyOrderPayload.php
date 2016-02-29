<?php
namespace Fortifi\Api\V1\Payloads;

class VerifyOrderPayload
  implements \JsonSerializable
{
  /**
   * FID for the payment service you wish to charge the customer through
   */
  protected $_paymentServiceFid;
  /**
   * FID for the payment account you wish to charge the customer through
   */
  protected $_paymentAccountFid;
  /**
   * Payment Service Processor Type
   */
  protected $_paymentServiceProcessor;
  protected $_successUrl;
  protected $_cancelUrl;
  protected $_failUrl;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["paymentServiceFid"]))
    {
      $this->_paymentServiceFid = $data["paymentServiceFid"];
    }
    if(isset($data["paymentAccountFid"]))
    {
      $this->_paymentAccountFid = $data["paymentAccountFid"];
    }
    if(isset($data["paymentServiceProcessor"]))
    {
      $this->_paymentServiceProcessor = $data["paymentServiceProcessor"];
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
      "paymentServiceFid"       => $this->_paymentServiceFid,
      "paymentAccountFid"       => $this->_paymentAccountFid,
      "paymentServiceProcessor" => $this->_paymentServiceProcessor,
      "successUrl"              => $this->_successUrl,
      "cancelUrl"               => $this->_cancelUrl,
      "failUrl"                 => $this->_failUrl,
    ];
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentServiceFid($default = null, $trim = true)
  {
    $value = $this->_paymentServiceFid ?: $default;
    return $trim ? trim($value) : $value;
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentAccountFid($default = null, $trim = true)
  {
    $value = $this->_paymentAccountFid ?: $default;
    return $trim ? trim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentServiceProcessor($value)
  {
    $this->_paymentServiceProcessor = $value;
    return $this;
  }

  /**
   * Payment Service Processor Type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPaymentServiceProcessor($default = null, $trim = true)
  {
    $value = $this->_paymentServiceProcessor ?: $default;
    return $trim ? trim($value) : $value;
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuccessUrl($default = null, $trim = true)
  {
    $value = $this->_successUrl ?: $default;
    return $trim ? trim($value) : $value;
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCancelUrl($default = null, $trim = true)
  {
    $value = $this->_cancelUrl ?: $default;
    return $trim ? trim($value) : $value;
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
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getFailUrl($default = null, $trim = true)
  {
    $value = $this->_failUrl ?: $default;
    return $trim ? trim($value) : $value;
  }
}
