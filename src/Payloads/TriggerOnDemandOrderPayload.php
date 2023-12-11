<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class TriggerOnDemandOrderPayload
  implements \JsonSerializable
{
  /**
   * Chargehive Scheduler ID to use
   */
  protected $_schedulerId;
  /**
   * Update the charge with the latest order details and customer methods
   */
  protected $_updateCharge;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["schedulerId"]))
    {
      $this->_schedulerId = (string)$data["schedulerId"];
    }
    if(isset($data["updateCharge"]))
    {
      $this->_updateCharge = (string)$data["updateCharge"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "schedulerId"  => $this->_schedulerId,
      "updateCharge" => $this->_updateCharge,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSchedulerId(?string $value)
  {
    $this->_schedulerId = $value;
    return $this;
  }

  /**
   * Chargehive Scheduler ID to use
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSchedulerId($default = null, $trim = true)
  {
    $value = $this->_schedulerId ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setUpdateCharge(?string $value)
  {
    $this->_updateCharge = $value;
    return $this;
  }

  /**
   * Update the charge with the latest order details and customer methods
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getUpdateCharge($default = null, $trim = true)
  {
    $value = $this->_updateCharge ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
