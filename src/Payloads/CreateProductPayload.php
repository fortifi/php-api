<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateProductPayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_productType;
  protected $_groupType;
  protected $_canSuspend;
  protected $_allowQuantity;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    if(isset($data["description"]))
    {
      $this->_description = (string)$data["description"];
    }
    if(isset($data["productType"]))
    {
      $this->_productType = (int)$data["productType"];
    }
    if(isset($data["groupType"]))
    {
      $this->_groupType = (string)$data["groupType"];
    }
    if(isset($data["canSuspend"]))
    {
      $this->_canSuspend = $data["canSuspend"];
    }
    if(isset($data["allowQuantity"]))
    {
      $this->_allowQuantity = $data["allowQuantity"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"   => $this->_displayName,
      "description"   => $this->_description,
      "productType"   => $this->_productType,
      "groupType"     => $this->_groupType,
      "canSuspend"    => $this->_canSuspend,
      "allowQuantity" => $this->_allowQuantity,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDisplayName(?string $value)
  {
    $this->_displayName = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDisplayName($default = null, $trim = true)
  {
    $value = $this->_displayName ?: $default;
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
   * @param int $value
   *
   * @return $this
   */
  public function setProductType(?int $value)
  {
    $this->_productType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getProductType($default = null)
  {
    return $this->_productType ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setGroupType(?string $value)
  {
    $this->_groupType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getGroupType($default = null, $trim = true)
  {
    $value = $this->_groupType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setCanSuspend(?bool $value)
  {
    $this->_canSuspend = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isCanSuspend($default = false)
  {
    return (bool)$this->_canSuspend ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setAllowQuantity(?bool $value)
  {
    $this->_allowQuantity = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isAllowQuantity($default = false)
  {
    return (bool)$this->_allowQuantity ?: $default;
  }
}
