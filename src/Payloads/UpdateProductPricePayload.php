<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class UpdateProductPricePayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_suspendAfterDays;
  protected $_cancelDays;
  protected $_suspendStyle;
  protected $_visibility;

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
    if(isset($data["suspendAfterDays"]))
    {
      $this->_suspendAfterDays = (int)$data["suspendAfterDays"];
    }
    if(isset($data["cancelDays"]))
    {
      $this->_cancelDays = (int)$data["cancelDays"];
    }
    if(isset($data["suspendStyle"]))
    {
      $this->_suspendStyle = (string)$data["suspendStyle"];
    }
    if(isset($data["visibility"]))
    {
      $this->_visibility = (int)$data["visibility"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"      => $this->_displayName,
      "description"      => $this->_description,
      "suspendAfterDays" => $this->_suspendAfterDays,
      "cancelDays"       => $this->_cancelDays,
      "suspendStyle"     => $this->_suspendStyle,
      "visibility"       => $this->_visibility,
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
  public function setSuspendAfterDays(?int $value)
  {
    $this->_suspendAfterDays = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSuspendAfterDays($default = null)
  {
    return $this->_suspendAfterDays ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setCancelDays(?int $value)
  {
    $this->_cancelDays = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getCancelDays($default = null)
  {
    return $this->_cancelDays ?: $default;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSuspendStyle(?string $value)
  {
    $this->_suspendStyle = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSuspendStyle($default = null, $trim = true)
  {
    $value = $this->_suspendStyle ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setVisibility(?int $value)
  {
    $this->_visibility = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getVisibility($default = null)
  {
    return $this->_visibility ?: $default;
  }
}
