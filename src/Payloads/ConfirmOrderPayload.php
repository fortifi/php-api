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
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "paymentServiceFid"       => $this->_paymentServiceFid,
      "paymentAccountFid"       => $this->_paymentAccountFid,
      "paymentServiceProcessor" => $this->_paymentServiceProcessor,
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
  const PAYMENT_SERVICE_PROCESSOR_COINBASE = 'coinbase';

  /**
   * @param string $value paypal, wire, blackhole, cheque, prepayment, fortifipay, coinbase
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
}
