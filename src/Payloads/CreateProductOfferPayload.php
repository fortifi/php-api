<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class CreateProductOfferPayload
  implements \JsonSerializable
{
  protected $_displayName;
  protected $_description;
  protected $_couponCode;
  protected $_discountAmount;
  protected $_discountType;
  protected $_setupDiscountAmount;
  protected $_setupDiscountType;
  protected $_apiOnly;

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
    if(isset($data["couponCode"]))
    {
      $this->_couponCode = (string)$data["couponCode"];
    }
    if(isset($data["discountAmount"]))
    {
      $this->_discountAmount = (float)$data["discountAmount"];
    }
    if(isset($data["discountType"]))
    {
      $this->_discountType = (int)$data["discountType"];
    }
    if(isset($data["setupDiscountAmount"]))
    {
      $this->_setupDiscountAmount = (float)$data["setupDiscountAmount"];
    }
    if(isset($data["setupDiscountType"]))
    {
      $this->_setupDiscountType = (int)$data["setupDiscountType"];
    }
    if(isset($data["apiOnly"]))
    {
      $this->_apiOnly = $data["apiOnly"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "displayName"         => $this->_displayName,
      "description"         => $this->_description,
      "couponCode"          => $this->_couponCode,
      "discountAmount"      => $this->_discountAmount,
      "discountType"        => $this->_discountType,
      "setupDiscountAmount" => $this->_setupDiscountAmount,
      "setupDiscountType"   => $this->_setupDiscountType,
      "apiOnly"             => $this->_apiOnly,
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
   * @param string $value
   *
   * @return $this
   */
  public function setCouponCode(?string $value)
  {
    $this->_couponCode = $value;
    return $this;
  }

  /**
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getCouponCode($default = null, $trim = true)
  {
    $value = $this->_couponCode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setDiscountAmount(?float $value)
  {
    $this->_discountAmount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getDiscountAmount($default = null)
  {
    return $this->_discountAmount ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setDiscountType(?int $value)
  {
    $this->_discountType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getDiscountType($default = null)
  {
    return $this->_discountType ?: $default;
  }

  /**
   * @param float $value
   *
   * @return $this
   */
  public function setSetupDiscountAmount(?float $value)
  {
    $this->_setupDiscountAmount = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return float
   */
  public function getSetupDiscountAmount($default = null)
  {
    return $this->_setupDiscountAmount ?: $default;
  }

  /**
   * @param int $value
   *
   * @return $this
   */
  public function setSetupDiscountType(?int $value)
  {
    $this->_setupDiscountType = $value;
    return $this;
  }

  /**
   * @param mixed $default
   *
   * @return integer
   */
  public function getSetupDiscountType($default = null)
  {
    return $this->_setupDiscountType ?: $default;
  }

  /**
   * @param bool $value
   *
   * @return $this
   */
  public function setApiOnly(?bool $value)
  {
    $this->_apiOnly = $value;
    return $this;
  }

  /**
   * @param bool $default
   *
   * @return boolean
   */
  public function isApiOnly($default = false)
  {
    return (bool)$this->_apiOnly ?: $default;
  }
}
