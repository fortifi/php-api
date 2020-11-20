<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateOrderItemPayload
  implements \JsonSerializable
{
  protected $_parentFid;
  protected $_identity;
  protected $_setProperties;
  protected $_displayName;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["parentFid"]))
    {
      $this->_parentFid = (string)$data["parentFid"];
    }
    if(isset($data["identity"]))
    {
      $this->_identity = (string)$data["identity"];
    }
    if(isset($data["setProperties"]))
    {
      $this->_setProperties = new PropertyBulkSetPayload();
      $this->_setProperties->hydrate($data["setProperties"]);
    }
    if(isset($data["displayName"]))
    {
      $this->_displayName = (string)$data["displayName"];
    }
    return $this;
  }

  public function jsonSerialize()
  {
    return [
      "parentFid"     => $this->_parentFid,
      "identity"      => $this->_identity,
      "setProperties" => $this->_setProperties,
      "displayName"   => $this->_displayName,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setParentFid(?string $value)
  {
    $this->_parentFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getParentFid($default = null, $trim = true)
  {
    $value = $this->_parentFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setIdentity(?string $value)
  {
    $this->_identity = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getIdentity($default = null, $trim = true)
  {
    $value = $this->_identity ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param PropertyBulkSetPayload $value
   *
   * @return $this
   */
  public function setSetProperties(?PropertyBulkSetPayload $value)
  {
    $this->_setProperties = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return PropertyBulkSetPayload
   */
  public function getSetProperties($default = null)
  {
    return $this->_setProperties ?: $default;
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
}
