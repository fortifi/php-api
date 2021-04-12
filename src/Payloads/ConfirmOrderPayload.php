<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ConfirmOrderPayload
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
  /**
   * If set to true, this will setup purchases before payment is received
   */
  protected $_setupPurchaseBeforePayment;
  /**
   * If set to true, we will not pre-auth the order
   */
  protected $_noPreAuth = false;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["paymentServiceFid"]))
    {
      $this->_paymentServiceFid = (string)$data["paymentServiceFid"];
    }
    if(isset($data["paymentAccountFid"]))
    {
      $this->_paymentAccountFid = (string)$data["paymentAccountFid"];
    }
    if(isset($data["paymentServiceProcessor"]))
    {
      $this->_paymentServiceProcessor = (string)$data["paymentServiceProcessor"];
    }
    if(isset($data["setupPurchaseBeforePayment"]))
    {
      $this->_setupPurchaseBeforePayment = $data["setupPurchaseBeforePayment"];
    }
    if(isset($data["noPreAuth"]))
    {
      $this->_noPreAuth = $data["noPreAuth"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "paymentServiceFid"          => $this->_paymentServiceFid,
      "paymentAccountFid"          => $this->_paymentAccountFid,
      "paymentServiceProcessor"    => $this->_paymentServiceProcessor,
      "setupPurchaseBeforePayment" => $this->_setupPurchaseBeforePayment,
      "noPreAuth"                  => $this->_noPreAuth,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentServiceFid(?string $value)
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
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPaymentAccountFid(?string $value)
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
    return $trim ? Strings::ntrim($value) : $value;
  }

  const PAYMENT_SERVICE_PROCESSOR_PAYPAL = 'paypal';
  const PAYMENT_SERVICE_PROCESSOR_WIRE = 'wire';
  const PAYMENT_SERVICE_PROCESSOR_BLACKHOLE = 'blackhole';
  const PAYMENT_SERVICE_PROCESSOR_CHEQUE = 'cheque';
  const PAYMENT_SERVICE_PROCESSOR_PREPAYMENT = 'prepayment';
  const PAYMENT_SERVICE_PROCESSOR_FORTIFIPAY = 'fortifipay';

  /**
   * @param string $value paypal, wire, blackhole, cheque, prepayment, fortifipay
   *
   * @return $this
   */
  public function setPaymentServiceProcessor(?string $value)
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
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setSetupPurchaseBeforePayment(?bool $value)
  {
    $this->_setupPurchaseBeforePayment = $value;
    return $this;
  }

  /**
   * If set to true, this will setup purchases before payment is received
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isSetupPurchaseBeforePayment($default = false)
  {
    return (bool)$this->_setupPurchaseBeforePayment ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setNoPreAuth(?bool $value)
  {
    $this->_noPreAuth = $value;
    return $this;
  }

  /**
   * If set to true, we will not pre-auth the order
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isNoPreAuth($default = false)
  {
    return (bool)$this->_noPreAuth ?: $default;
  }
}
