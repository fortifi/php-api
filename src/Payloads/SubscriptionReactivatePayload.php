<?php
namespace Fortifi\Api\V1\Payloads;

class SubscriptionReactivatePayload
  implements \JsonSerializable
{
  /**
   * Reactivate without charging an unpaid period
   */
  protected $_waiveUnpaid;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["waiveUnpaid"]))
    {
      $this->_waiveUnpaid = $data["waiveUnpaid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "waiveUnpaid" => $this->_waiveUnpaid,
    ];
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setWaiveUnpaid(?bool $value)
  {
    $this->_waiveUnpaid = $value;
    return $this;
  }

  /**
   * Reactivate without charging an unpaid period
   *
   * @param bool $default
   *
   * @return boolean
   */
  public function isWaiveUnpaid($default = false)
  {
    return (bool)$this->_waiveUnpaid ?? $default;
  }
}
