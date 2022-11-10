<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class FinalizeOrderPayload
  implements \JsonSerializable
{
  /**
   * ChargeHive Charge ID
   */
  protected $_chargeId;
  /**
   * Payment Method ID
   */
  protected $_methodId;
  /**
   * Transaction ID which authorized this order
   */
  protected $_transactionId;
  /**
   * If set to true, this will setup purchases before payment is received
   */
  protected $_setupPurchaseBeforePayment;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["chargeId"]))
    {
      $this->_chargeId = (string)$data["chargeId"];
    }
    if(isset($data["methodId"]))
    {
      $this->_methodId = (string)$data["methodId"];
    }
    if(isset($data["transactionId"]))
    {
      $this->_transactionId = (string)$data["transactionId"];
    }
    if(isset($data["setupPurchaseBeforePayment"]))
    {
      $this->_setupPurchaseBeforePayment = $data["setupPurchaseBeforePayment"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "chargeId"                   => $this->_chargeId,
      "methodId"                   => $this->_methodId,
      "transactionId"              => $this->_transactionId,
      "setupPurchaseBeforePayment" => $this->_setupPurchaseBeforePayment,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setChargeId(?string $value)
  {
    $this->_chargeId = $value;
    return $this;
  }

  /**
   * ChargeHive Charge ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getChargeId($default = null, $trim = true)
  {
    $value = $this->_chargeId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setMethodId(?string $value)
  {
    $this->_methodId = $value;
    return $this;
  }

  /**
   * Payment Method ID
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMethodId($default = null, $trim = true)
  {
    $value = $this->_methodId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTransactionId(?string $value)
  {
    $this->_transactionId = $value;
    return $this;
  }

  /**
   * Transaction ID which authorized this order
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTransactionId($default = null, $trim = true)
  {
    $value = $this->_transactionId ?: $default;
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
}
