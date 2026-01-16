<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateProductPayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_productType;
  protected $_groupType;
  protected $_defaultPriceFid;
  protected $_maxQuantity;
  protected $_canSuspend;
  protected $_canModifySku;
  protected $_cancelReasonFid;
  protected $_suspendReasonFid;
  protected $_refundReasonFid;

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
    if(isset($data["defaultPriceFid"]))
    {
      $this->_defaultPriceFid = (string)$data["defaultPriceFid"];
    }
    if(isset($data["maxQuantity"]))
    {
      $this->_maxQuantity = (int)$data["maxQuantity"];
    }
    if(isset($data["canSuspend"]))
    {
      $this->_canSuspend = $data["canSuspend"];
    }
    if(isset($data["canModifySku"]))
    {
      $this->_canModifySku = $data["canModifySku"];
    }
    if(isset($data["cancelReasonFid"]))
    {
      $this->_cancelReasonFid = (string)$data["cancelReasonFid"];
    }
    if(isset($data["suspendReasonFid"]))
    {
      $this->_suspendReasonFid = (string)$data["suspendReasonFid"];
    }
    if(isset($data["refundReasonFid"]))
    {
      $this->_refundReasonFid = (string)$data["refundReasonFid"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"      => $this->_displayName,
      "description"      => $this->_description,
      "productType"      => $this->_productType,
      "groupType"        => $this->_groupType,
      "defaultPriceFid"  => $this->_defaultPriceFid,
      "maxQuantity"      => $this->_maxQuantity,
      "canSuspend"       => $this->_canSuspend,
      "canModifySku"     => $this->_canModifySku,
      "cancelReasonFid"  => $this->_cancelReasonFid,
      "suspendReasonFid" => $this->_suspendReasonFid,
      "refundReasonFid"  => $this->_refundReasonFid,
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
   * @param string $value
   *
   * @return $this
   */
  public function setDefaultPriceFid(?string $value)
  {
    $this->_defaultPriceFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getDefaultPriceFid($default = null, $trim = true)
  {
    $value = $this->_defaultPriceFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setMaxQuantity(?int $value)
  {
    $this->_maxQuantity = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getMaxQuantity($default = null)
  {
    return $this->_maxQuantity ?: $default;
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
  public function setCanModifySku(?bool $value)
  {
    $this->_canModifySku = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isCanModifySku($default = false)
  {
    return (bool)$this->_canModifySku ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setCancelReasonFid(?string $value)
  {
    $this->_cancelReasonFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCancelReasonFid($default = null, $trim = true)
  {
    $value = $this->_cancelReasonFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSuspendReasonFid(?string $value)
  {
    $this->_suspendReasonFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuspendReasonFid($default = null, $trim = true)
  {
    $value = $this->_suspendReasonFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setRefundReasonFid(?string $value)
  {
    $this->_refundReasonFid = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getRefundReasonFid($default = null, $trim = true)
  {
    $value = $this->_refundReasonFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
