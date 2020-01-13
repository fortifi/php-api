<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class AvailabilityCheckPayload
  implements \JsonSerializable
{
  protected $_productSku;
  protected $_priceFid;
  /**
   * Additional information to store
   */
  protected $_properties;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["productSku"]))
    {
      $this->_productSku = (string)$data["productSku"];
    }
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["properties"]))
    {
      $this->_properties = [];
      foreach($data["properties"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_properties[] = $dObj;
      }
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "productSku" => $this->_productSku,
      "priceFid"   => $this->_priceFid,
      "properties" => $this->_properties,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setProductSku($value)
  {
    $this->_productSku = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getProductSku($default = null, $trim = true)
  {
    $value = $this->_productSku ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPriceFid($value)
  {
    $this->_priceFid = $value;
    return $this;
  }

  /**
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
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setProperties(array $value)
  {
    $this->_properties = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addPropertie(KeyValuePayload $item)
  {
    $this->_properties[] = $item;
    return $this;
  }

  /**
   * Additional information to store
   *
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getProperties($default = [])
  {
    return $this->_properties ?: $default;
  }
}
