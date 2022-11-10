<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class OrderProductQuantityPayload
  implements \JsonSerializable
{
  /**
   * Price FID to modify subscription with
   * @required
   */
  protected $_priceFid;
  protected $_quantity = 1;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["quantity"]))
    {
      $this->_quantity = (int)$data["quantity"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "priceFid" => $this->_priceFid,
      "quantity" => $this->_quantity,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceFid(?string $value)
  {
    $this->_priceFid = $value;
    return $this;
  }

  /**
   * Price FID to modify subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPriceFid($default = null, $trim = true)
  {
    $value = $this->_priceFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setQuantity(?int $value)
  {
    $this->_quantity = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getQuantity($default = null)
  {
    return $this->_quantity ?: $default;
  }
}
