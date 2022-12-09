<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateInteractionPayload
  implements \JsonSerializable
{
  protected $_companyFid;
  protected $_departmentFid;
  protected $_queueFid;
  protected $_interactionType;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["companyFid"]))
    {
      $this->_companyFid = (string)$data["companyFid"];
    }
    if(isset($data["departmentFid"]))
    {
      $this->_departmentFid = (string)$data["departmentFid"];
    }
    if(isset($data["queueFid"]))
    {
      $this->_queueFid = (string)$data["queueFid"];
    }
    if(isset($data["interactionType"]))
    {
      $this->_interactionType = (string)$data["interactionType"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "companyFid"      => $this->_companyFid,
      "departmentFid"   => $this->_departmentFid,
      "queueFid"        => $this->_queueFid,
      "interactionType" => $this->_interactionType,
    ];
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCompanyFid(?string $value)
  {
    $this->_companyFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCompanyFid($default = null, $trim = true)
  {
    $value = $this->_companyFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setDepartmentFid(?string $value)
  {
    $this->_departmentFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDepartmentFid($default = null, $trim = true)
  {
    $value = $this->_departmentFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setQueueFid(?string $value)
  {
    $this->_queueFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getQueueFid($default = null, $trim = true)
  {
    $value = $this->_queueFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setInteractionType(?string $value)
  {
    $this->_interactionType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getInteractionType($default = null, $trim = true)
  {
    $value = $this->_interactionType ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
