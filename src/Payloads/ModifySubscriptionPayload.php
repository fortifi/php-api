<?php
namespace Fortifi\Api\V1\Payloads;
use Packaged\Helpers\Strings;

class ModifySubscriptionPayload
  implements \JsonSerializable
{
  /**
   * Price FID to modify subscription with
   * @required
   */
  protected $_priceFid;
  /**
   * Description of the modify subscription
   */
  protected $_description;
  /**
   * Offer FID to apply to the modify order item
   */
  protected $_offerFid;
  /**
   * SKU or SkuFid to modify subscription with
   */
  protected $_sku;
  /**
   * Mode to modify subscription with
   */
  protected $_mode;

  public function hydrate($data)
  {
    $data = (array)$data;
    if(isset($data["priceFid"]))
    {
      $this->_priceFid = (string)$data["priceFid"];
    }
    if(isset($data["description"]))
    {
      $this->_description = (string)$data["description"];
    }
    if(isset($data["offerFid"]))
    {
      $this->_offerFid = (string)$data["offerFid"];
    }
    if(isset($data["sku"]))
    {
      $this->_sku = (string)$data["sku"];
    }
    if(isset($data["mode"]))
    {
      $this->_mode = (string)$data["mode"];
    }
    return $this;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    return [
      "priceFid"    => $this->_priceFid,
      "description" => $this->_description,
      "offerFid"    => $this->_offerFid,
      "sku"         => $this->_sku,
      "mode"        => $this->_mode,
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
   * Description of the modify subscription
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
   * @param string $value
   *
   * @return $this
   */
  public function setOfferFid(?string $value)
  {
    $this->_offerFid = $value;
    return $this;
  }

  /**
   * Offer FID to apply to the modify order item
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getOfferFid($default = null, $trim = true)
  {
    $value = $this->_offerFid ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  /**
   * @param string $value
   *
   * @return $this
   */
  public function setSku(?string $value)
  {
    $this->_sku = $value;
    return $this;
  }

  /**
   * SKU or SkuFid to modify subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getSku($default = null, $trim = true)
  {
    $value = $this->_sku ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }

  const MODE_PRORATE = 'prorate';
  const MODE_EXTEND = 'extend';
  const MODE_REPLACE = 'replace';

  /**
   * @param string $value prorate, extend, replace
   *
   * @return $this
   */
  public function setMode(?string $value)
  {
    $this->_mode = $value;
    return $this;
  }

  /**
   * Mode to modify subscription with
   *
   * @param mixed $default
   * @param bool $trim Trim Value
   *
   * @return string
   */
  public function getMode($default = null, $trim = true)
  {
    $value = $this->_mode ?: $default;
    return $trim ? Strings::ntrim($value) : $value;
  }
}
