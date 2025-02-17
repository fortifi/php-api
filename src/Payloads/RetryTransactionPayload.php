<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class RetryTransactionPayload
  implements \JsonSerializable
{
  /**
   * @required
   */
  protected $_trigger;
  protected $_unlockPaymentMethods = false;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["trigger"]))
    {
      $this->_trigger = (string)$data["trigger"];
    }
    if(isset($data["unlockPaymentMethods"]))
    {
      $this->_unlockPaymentMethods = $data["unlockPaymentMethods"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "trigger"              => $this->_trigger,
      "unlockPaymentMethods" => $this->_unlockPaymentMethods,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setTrigger(?string $value)
  {
    $this->_trigger = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getTrigger($default = null, $trim = true)
  {
    $value = $this->_trigger ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setUnlockPaymentMethods(?bool $value)
  {
    $this->_unlockPaymentMethods = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isUnlockPaymentMethods($default = false)
  {
    return (bool)$this->_unlockPaymentMethods ?: $default;
  }
}
