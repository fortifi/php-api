<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreatePolymerPayload
  implements \JsonSerializable
{
  /**
   * Code for polymer type
   */
  protected $_polymerCode;
  /**
   * Display name for this polymer
   */
  protected $_name;
  /**
   * Description for this polymer
   */
  protected $_description;
  protected $_data;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["polymerCode"]))
    {
      $this->_polymerCode = (string)$data["polymerCode"];
    }
    if(isset($data["name"]))
    {
      $this->_name = (string)$data["name"];
    }
    if(isset($data["description"]))
    {
      $this->_description = (string)$data["description"];
    }
    if(isset($data["data"]))
    {
      $this->_data = [];
      foreach($data["data"] as $dItem)
      {
        $dObj = new KeyValuePayload();
        $dObj->hydrate($dItem);
        $this->_data[] = $dObj;
      }
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "polymerCode" => $this->_polymerCode,
      "name"        => $this->_name,
      "description" => $this->_description,
      "data"        => $this->_data,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setPolymerCode(?string $value)
  {
    $this->_polymerCode = $value;
    return $this;
  }

  /**
   * Code for polymer type
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getPolymerCode($default = null, $trim = true)
  {
    $value = $this->_polymerCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setName(?string $value)
  {
    $this->_name = $value;
    return $this;
  }

  /**
   * Display name for this polymer
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getName($default = null, $trim = true)
  {
    $value = $this->_name ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDescription(?string $value)
  {
    $this->_description = $value;
    return $this;
  }

  /**
   * Description for this polymer
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDescription($default = null, $trim = true)
  {
    $value = $this->_description ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param KeyValuePayload[] $value
   *
   * @return $this
   */
  public function setData(?array $value)
  {
    $this->_data = $value;
    return $this;
  }

  /**
   * @param KeyValuePayload $item
   *
   * @return $this
   */
  public function addDatum(KeyValuePayload $item)
  {
    $this->_data[] = $item;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return KeyValuePayload[]
   */
  public function getData($default = [])
  {
    return $this->_data ?: $default;
  }
}
