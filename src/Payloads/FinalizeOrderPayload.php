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
   * Transaction ID which authorized this order
   */
  protected $_transactionId;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["chargeId"]))
    {
      $this->_chargeId = (string)$data["chargeId"];
    }
    if(isset($data["transactionId"]))
    {
      $this->_transactionId = (string)$data["transactionId"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "chargeId"      => $this->_chargeId,
      "transactionId" => $this->_transactionId,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setChargeId($value)
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
  public function setTransactionId($value)
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
}
